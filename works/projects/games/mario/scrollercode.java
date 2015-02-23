/*MARIO
16x27

Forward
30 left, 24 down
45 left, 50 down
*/


/*
<applet code="scrollercode.java" width="600" height="320">
</applet>
*/

import java.awt.*;
import java.awt.event.*;
import java.applet.*;
import java.util.*;

public class scrollercode extends Applet implements Runnable, KeyListener{

	int tilePosition = -300; //-32, also used to be "i"

	MediaTracker tracker;	
	
	Color backgroundColor = new Color(255,255,255);

	int width, height;
	
	int MOVESPEED = 10;
	int JUMPSPEED = 10;
	int JUMPHEIGHT = 170;
	int ENEMYMOVESPEED = 5;
	int FIREMOVESPEED = 15;
	
	int killcount = 0;
	
	int mleft, mright, mtop, mbottom;
	int eleft, eright, etop, ebottom;
	int fireleft, fireright, firetop, firebottom;
	int currentmbot;
	int ground;

	int blockLeft, blockRight, blockTop, blockBottom; //block is 28x28
	
	int TileWidth,TileHeight; //bg tiles is 300x300
	int NumberTileX, NumberTileY;
	
	// Keys
	boolean flip  = true;
  	boolean left  = false;
  	boolean right = false;
 	boolean up    = false;
  	boolean down  = false;
	boolean jump_button = false;
	boolean shoot_button   = false;
	boolean enter = false;
	
	//Internal game
	boolean welcome = true;
	boolean dead = false;
	boolean reset = false;
	
	//Fireballs on screen and direction
	boolean disableShoot = false;
	boolean fireballOnScreen = false;
	boolean lastPressLeft = false;
	boolean lastPressRight = true;
	boolean lockLeft = false;
	boolean lockRight = true;
	
	//Misc
	boolean disableJump = false;
	boolean disableJumpButton = false;
	boolean onBlock = false;
	boolean onGround = true;
	boolean enemyGoLeft = true; //if false, go right relative to screen
	boolean lastGround = true; //if false, Mario was standing on block before
	
	Random rand = new Random();

	Image backbuffer, background, mario, block, enemy, fireball;
   	Graphics backg; 
	
	Font titlefont = new Font("SansSerif", Font.BOLD, 18);
	Font normalfont = new Font("SansSerif", Font.PLAIN, 14);

//------------------------------------------------------------------------
	public void init(){
		width = getWidth();
		height = getHeight();

		tracker = new MediaTracker(this);
	
		mario = getImage(getCodeBase(),"mario.png");
		enemy = getImage(getCodeBase(),"enemy.png");
		background = getImage(getCodeBase(), "sky2.jpg");
		block = getImage(getCodeBase(), "block.png");
		fireball = getImage(getCodeBase(), "fireball.png");
		
		tracker.addImage(mario, 0);
		tracker.addImage(enemy, 0);
		tracker.addImage(background, 0);
		tracker.addImage(block, 0);
		tracker.addImage(fireball, 0);
		try{
			tracker.waitForID(0);
		}catch(InterruptedException ie){}		

		addKeyListener(this);

		//Where Mario first appears?, also sets Mario bounds? (Mario is 32 px tall)
		ground = height - 30;
		mbottom = ground;
		mtop = mbottom - 30;
		mleft = width/2;
		mright = mleft + 15;
		currentmbot = mbottom;		

		//Enemy
		ebottom = ground;
		etop = ebottom - 30;
		eleft = width;
		eright = eleft + 15;
		
		//Where the block appears? (block is 28x28)
		blockBottom = ground - 50;
		blockTop = blockBottom - 30;
		blockLeft = width/2;
		blockRight = blockLeft + 30;
		
		TileWidth = background.getWidth(this);
		TileHeight = background.getHeight(this);

		NumberTileX = width/TileWidth + 2; //+# adds more tiles to cover up blank jump_button
		NumberTileY = height/TileHeight;				

		backbuffer = createImage(width, height);
     	backg = backbuffer.getGraphics();

		Thread t = new Thread(this);
		t.start();
	}
	
//------------------------------------------------------------------------
	public void paintBackBuffer(){

		//Game starts!
		if (welcome){
		
			backg.setColor(Color.gray);
			backg.fillRect(0,0,width,height);
		
			backg.setColor(Color.black);	
			backg.setFont(titlefont);
			centerTheString("Super Sorry-o Bros.!", width, height - 100, backg);
			
			backg.setFont(normalfont);
			centerTheString("ARROW KEYS to move", width, height - 40, backg);
			centerTheString("SPACE to jump", width, height, backg);
			centerTheString("C to fire", width, height + 40, backg);
			centerTheString("ENTER to start!", width, height + 80, backg);
			if (enter){
				welcome = false;
			}
			
		}else{
			//Dead
			if (dead){	
				gameover();
				
			//Not dead
			}else if (!dead){
			
				//Reset positions
				if (reset){
					killcount = 0;
				
					//Mario
					ground = height - 30;
					mbottom = ground;
					mtop = mbottom - 30;
					mleft = width/2;
					mright = mleft + 15;
					currentmbot = mbottom;
					
					//Enemy
					ebottom = ground;
					etop = ebottom - 30;
					eleft = width;
					eright = eleft + 15;
					
					//Where the block appears? (block is 28x28)
					blockBottom = ground - 50;
					blockTop = blockBottom - 30;
					blockLeft = width/2;
					blockRight = blockLeft + 30;
					reset = false;
					
				//Normal game
				}else if (!reset){
				
					backg.setColor(backgroundColor);
					backg.fillRect(0, 0, width, height);
					//Draw the background tiles over and over
					for(int h = 0; h <= NumberTileY; h++){
						for(int j = 0; j <= NumberTileX; j++){
							//paste a few copies of tile right next to each other for illusion?
							backg.drawImage(background, tilePosition + j*TileWidth, h*TileHeight, this);
						}
					}
					backg.setColor(Color.green);
					//move the tile up so that the ground is at the bottom
					backg.fillRect(0, ground, width, TileWidth); 
					
					backg.setFont(normalfont);
					backg.setColor(Color.black);
					centerTheString("Kills: " + killcount, width, height - 40, backg);
					
					block();
					mario();
					enemy();
					fireball();
				}
			} 
		}
		repaint();
	}
	
//Used this: http://www.java2s.com/Tutorial/Java/0261__2D-Graphics/Centertext.htm
//------------------------------------------------------------------------
	public void centerTheString(String string, int width, int height, Graphics g) {
		FontMetrics fm = g.getFontMetrics();
		int x = (width - fm.stringWidth(string)) / 2;
		int y = (fm.getAscent() + (height - (fm.getAscent() + fm.getDescent())) / 2);
		backg.drawString(string, x, y);
	}
	
//------------------------------------------------------------------------
	public void gameover(){
		backg.setColor(Color.black);
		backg.fillRect(0,0,width,height);
		backg.setColor(Color.white);
		
		backg.setFont(titlefont);
		centerTheString("GAME OVER", width, height - 20, backg);
		
		backg.setFont(normalfont);
		centerTheString("Press ENTER", width, height + 20, backg);
		
		if (enter){
			dead = false;
			reset = true;
		}
	}
	
//------------------------------------------------------------------------
	public void mario(){
	
		//Jump
		if (jump_button && !disableJump){
			if (mtop >= JUMPHEIGHT){
				mtop -= JUMPSPEED;
				mbottom -= JUMPSPEED;
			}else if (mtop < JUMPHEIGHT){
				disableJump = true;
				mtop += JUMPSPEED;
				mbottom += JUMPSPEED;
			}
		}else if (!jump_button && mbottom < ground){
			disableJump = true;
			mtop += JUMPSPEED;
			mbottom += JUMPSPEED;
		}else if (disableJump){
			disableJump = true;
			mtop += JUMPSPEED;
			mbottom += JUMPSPEED;
		}
		
		//Go right
		if(right){
			lastPressRight = true;
			lastPressLeft = false;
			if (mright <= width - 250){ //Mario moves, bg stays until mario hits certain spot
				mright += MOVESPEED;
				mleft += MOVESPEED;
			}	
			if(mright >= width - 250){ //"tilePosition" is the position of bg
				blockRight -= MOVESPEED;
				blockLeft -= MOVESPEED;
				tilePosition -= MOVESPEED;
				tilePosition = tilePosition%TileWidth;
				if(tilePosition >= 0){
					tilePosition = -TileWidth; //recycles the tile to reuse it again by moving it back
				}
			}	
			if(flip && lastPressRight){ //Flip between two running images
				//sheet, left, top, right, bottom, positions
				backg.drawImage(mario, mleft, mtop, mright, mbottom, 105, 24, 90, 50, this); 
				flip = false;
			}else{
				backg.drawImage (mario, mleft, mtop, mright, mbottom, 135, 24, 120, 50, this);
				flip = true;
			}
			
		//Go left
		}else if(left){
			lastPressRight = false;
			lastPressLeft = true;
			if (mleft >= 250){ //Mario moves, bg stays until mario hits certain spot
				mright -= MOVESPEED;
				mleft -= MOVESPEED;
			}
			if(mleft <= 250){ //"i" moves the background left and right
				blockRight += MOVESPEED;
				blockLeft += MOVESPEED;
				tilePosition += MOVESPEED;
				tilePosition = tilePosition%TileWidth;
				if(tilePosition >= 0){
					tilePosition = -TileWidth; //recycles the tile to reuse it again by moving it back
				}
			}
			if(flip && lastPressLeft){ //Flip between two running images
				backg.drawImage(mario, mleft, mtop, mright, mbottom, 90, 24, 105, 50, this);
				flip = false;
			}else{
				backg.drawImage(mario, mleft, mtop, mright, mbottom, 120, 24, 135, 50, this);
				flip = true;
			}
		
		//When Mario is doing nothing
		}else{
			backg.drawImage(mario, mleft, mtop, mright, mbottom, 30, 24, 45, 50, this);
		}	
		
		//Don't go below ground
		if (mbottom >= ground){
			onGround = true;
			lastGround = true;
			mbottom = ground;
			mtop = mbottom - 30;
			disableJump = false;
		}else{
			onGround = false;
		}
	}
//------------------------------------------------------------------------
	public void fireball(){
	
		if (lockRight){
			backg.drawImage(fireball, fireleft, firetop, fireright, firebottom, 0, 0, 15, 30, this);
		}else if (lockLeft){
			backg.drawImage(fireball, fireleft, firetop, fireright, firebottom, 15, 0, 0, 30, this);
		}
		
		if (shoot_button && !fireballOnScreen){
			if (lastPressLeft){
				System.out.println("lastpressleft");
				fireballOnScreen = true;
				lockLeft = true;
				
				firebottom = mbottom;
				firetop = mtop;
				fireleft = mleft - 15;
				fireright = mleft;
				
			}else if (lastPressRight){
				System.out.println("lastpressright");
				fireballOnScreen = true;
				lockRight = true;
	
				firebottom = mbottom;
				firetop = mtop;
				fireleft = mright;
				fireright = mright + 15;
			}
		}
		
		if (fireballOnScreen && lockLeft){
			fireleft -= FIREMOVESPEED;
			fireright -= FIREMOVESPEED;
		}else if (fireballOnScreen && lockRight){
			fireleft += FIREMOVESPEED;
			fireright += FIREMOVESPEED;
		}
		
		//"Store" fireball offscreen
		if (fireleft >= width){
			lockLeft = false;
			lockRight = false;
			fireballOnScreen = false;
			
			firetop = - 200;
			firebottom = firetop + 30;
			//fireleft = width + 155;
			//fireright = fireleft + 15;
		}else if (fireleft <= 0){
			lockLeft = false;
			lockRight = false;
			fireballOnScreen = false;
			firetop = - 200;
			firebottom = firetop + 30;
			//fireright = - 155;
			//fireleft = fireright - 15;
		}
	}
	
//------------------------------------------------------------------------
	public void enemy(){
	
		if (enemyGoLeft){
			//image shifts left relative to screen
			backg.drawImage(enemy, eleft, etop, eright, ebottom, 0, 0, 15, 30, this); //true
		}else{
			//image shifts right relative to screen
			backg.drawImage(enemy, eleft, etop, eright, ebottom, 15, 0, 0, 30, this); //false
		}
	
		//Go left if Mario is to the left
		if (left) {
			if (mleft <= 250 && mright <= eright){
				//System.out.println("LEFT mleft <= 250 && mright <= eleft");
				enemyGoLeft = true;
				eleft += (MOVESPEED - ENEMYMOVESPEED);
				eright += (MOVESPEED - ENEMYMOVESPEED);
			}else if (mleft <= 250 && mleft >= eleft){
				//System.out.println("LEFT mleft <= 250 && mleft >= eright");
				enemyGoLeft = false;
				eleft += (MOVESPEED + ENEMYMOVESPEED);
				eright += (MOVESPEED + ENEMYMOVESPEED);
			}else if (mleft >= eright){
				//System.out.println("LEFT mleft >= eright");
				//enemyGoLeft = false;
				eleft += ENEMYMOVESPEED;
				eright += ENEMYMOVESPEED;
			}else if (mright <= eleft){
				//System.out.println("LEFT mright <= eleft");
				//enemyGoLeft = true;
				eleft -= ENEMYMOVESPEED;
				eright -= ENEMYMOVESPEED;
			}
		}else if (right) {
			if (mright >= width - 250 && mleft >= eleft){
				//System.out.println("RIGHT mright >= width - 250 && mleft >= eright");
				enemyGoLeft = false;
				eleft -= (MOVESPEED - ENEMYMOVESPEED);
				eright -= (MOVESPEED - ENEMYMOVESPEED);
			}else if (mright >= width - 250 && mright <= eright){
				//System.out.println("RIGHT mright >= width - 250 && mright <= eleft");
				enemyGoLeft = true;
				eleft -= (MOVESPEED + ENEMYMOVESPEED);
				eright -= (MOVESPEED + ENEMYMOVESPEED);
			}else if (mleft >= eright){
				//System.out.println("RIGHT mleft >= eright");
				//enemyGoLeft = true;
				eleft += ENEMYMOVESPEED;
				eright += ENEMYMOVESPEED;
			}else if (mright <= eleft){
				//System.out.println("RIGHT mright <= eleft");
				//enemyGoLeft = true;
				eleft -= ENEMYMOVESPEED;
				eright -= ENEMYMOVESPEED;
			}
		}else if (mleft >= eright){
			//System.out.println("mleft >= eright 1");
			enemyGoLeft = false;
			eleft += ENEMYMOVESPEED;
			eright += ENEMYMOVESPEED;
		}else if (mright <= eleft){
			//System.out.println("mright <= eleft 2");
			enemyGoLeft = true;
			eleft -= ENEMYMOVESPEED;
			eright -= ENEMYMOVESPEED;
		}
		
		if (eleft <= mright && eleft >= mright - 16){
			if (mbottom >= etop || mtop >= etop){
				//System.out.println("DEAD eleft");
				dead = true;
			}
		}else if (eright >= mleft && eright <= mleft + 16){
			if (mbottom >= etop || mtop >= etop){
				//System.out.println("DEAD eright");
				dead = true;
			}
		}
		
		if (eleft <= fireright && eright >= fireleft){
			if (firetop == etop || firetop >= etop - 5){
				System.out.println("kill");
				killcount ++;
				
				int randomnumber = rand.nextInt(2) + 1;
				if (randomnumber == 2){
					System.out.println("2");
					
					lockLeft = false;
					lockRight = false;
					fireballOnScreen = false;
					//fireright = - 155;
					//fireleft = fireright - 15;
					firetop = - 200;
					firebottom = firetop + 30;
					
					ebottom = ground;
					etop = ebottom - 30;
					eleft = width + 5;
					eright = eleft + 15;
					randomnumber = 0;
				}else if (randomnumber == 1){
					System.out.println("1");
					
					lockLeft = false;
					lockRight = false;
					fireballOnScreen = false;
					//fireleft = width + 155;
					//fireright = fireright + 15;
					firetop = - 200;
					firebottom = firetop + 30;
					
					ebottom = ground;
					etop = ebottom - 30;
					eright = - 5;
					eleft = eright - 15;
					randomnumber = 0;
				}
				
			}
		}
	}
	
//------------------------------------------------------------------------
	public void block(){
		backg.drawImage(block, blockLeft, blockTop, this);
	
	//Top side	
		if (mbottom >= blockTop && mtop <= blockTop){
			if (mright > blockLeft && mleft < blockRight){
				//System.out.println("Top side");
				//System.out.println("true");
				onBlock = true;
				lastGround = false;
				disableJump = false;
				mbottom = blockTop;
				mtop = mbottom - 30;
			}else{
				//System.out.println(" false in topside");
				onBlock = false;
				//disableJump = true;	
			}
			
	//Bottom side
		}else if (mtop <= blockBottom && mbottom >= blockBottom + 25){
			if (mright > blockLeft && mleft < blockRight){
				//System.out.println("Bottom side");
				disableJump = true;
				mtop = blockBottom;
				mbottom = mtop + 30;
			}else{
				//System.out.println(" false in bottom");
				onBlock = false;
				//disableJump = false;
			}
			
	//Left side - Top of Mario
		}else if (mright >= blockLeft && mright < blockRight){
			if (mtop < blockBottom && mbottom > blockTop){
				//System.out.println("Left side - Top of Mario");
				//disableJump = true;
				mright = blockLeft;
				mleft = mright - 15;
			}
	//Left side - Bottom of Mario
		}else if (mright >= blockLeft && mright < blockRight){
			if (mbottom > blockTop && mbottom < blockBottom){
				//System.out.println("Left side - Bottom of Mario");
				//disableJump = true;
				mright = blockLeft;
				mleft = mright - 15;
			}
	//Right side - Top of Mario
		}else if (mleft > blockLeft && mleft <= blockRight){
			if (mtop < blockBottom && mtop > blockTop){
				//System.out.println("Right side - Top of Mario");
				//disableJump = true;
				mleft = blockRight;
				mright = mleft + 15;
			}
	//Right side - Bottom of Mario
		}else if (mleft < blockRight && mbottom > blockRight){
			if (mbottom < blockBottom && mbottom > blockTop){
				//System.out.println("Right side - Bottom of Mario");
				//disableJump = true;
				mleft = blockRight;
				mright = mleft + 15;
			}
	
		}else{
			//disableJump = false;
			//System.out.println(" false in else");
			onBlock = false;
		}
		
	}
	
//------------------------------------------------------------------------
	public void update(Graphics g){
		g.drawImage(backbuffer,0,0,this);
	}

//------------------------------------------------------------------------
	public void paint(Graphics g){
		update(g);	
	}
	
//------------------------------------------------------------------------
	public void keyPressed(KeyEvent e) { 	// Check if any cursor keys have been pressed and set flags.
		if (e.getKeyCode() == KeyEvent.VK_LEFT){
      		left = true;
		}
    	if (e.getKeyCode() == KeyEvent.VK_RIGHT){
      		right = true;
		}
    	if (e.getKeyCode() == KeyEvent.VK_UP){
      		up = true;
		}
   		if (e.getKeyCode() == KeyEvent.VK_DOWN){
  			down = true;
  		}
		if (e.getKeyCode() == KeyEvent.VK_SPACE){
			jump_button = true;
		}
		if (e.getKeyCode() == KeyEvent.VK_C){
			shoot_button = true;
		}
		if (e.getKeyCode() == KeyEvent.VK_ENTER){
			enter = true;
		}
	}

//------------------------------------------------------------------------
  	public void keyReleased(KeyEvent e) { // Check if any cursor keys where released and set flags.
    	if (e.getKeyCode() == KeyEvent.VK_LEFT){
      		left = false;
		}
    	if (e.getKeyCode() == KeyEvent.VK_RIGHT){
      		right = false;
		}
    	if (e.getKeyCode() == KeyEvent.VK_UP){
      		up = false;
		}
    	if (e.getKeyCode() == KeyEvent.VK_DOWN){
      		down = false;
		}
		if (e.getKeyCode() == KeyEvent.VK_SPACE){
			jump_button = false;
		}
		if (e.getKeyCode() == KeyEvent.VK_C){
			shoot_button = false;
		}
		if (e.getKeyCode() == KeyEvent.VK_ENTER){
			enter = false;
		}
  	}

//------------------------------------------------------------------------
  	public void keyTyped(KeyEvent e) {}

//------------------------------------------------------------------------
	public void run(){
		while(true){
				paintBackBuffer();
				
			try{
				Thread.sleep(50);
			}catch(Exception e){}		
		}
	}	
}