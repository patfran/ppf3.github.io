/*

Patrick Francisco
ppf3
Professor Nicholson
CS 266-001
September 20, 2012

Pong Game

*/

import java.applet.*;
import java.awt.*;
import java.awt.event.*;

public class pong extends Applet implements KeyListener, Runnable{
		
	//Applet width, height
	int width, height;

	//Right paddle properties
	int rpaddlex = 0, rpaddley = 0; 			//right paddle initial starting location
	int rpaddlewidth = 20, rpaddleheight = 100; //right paddle size
	
	//Left paddle properties
	int lpaddlex = 0, lpaddley = 0; 			//left paddle initial starting location
	int lpaddlewidth = 20, lpaddleheight = 100; //left paddle size

	//Ball properties
	int ballx = 200, bally = 75; 			//ball start location?
	int ballwidth = 10, ballheight = 10; 	//ball size
	int deltax = 4, deltay = 1; 			//ball speed
	int originaldeltax = 4, originaldeltay = 1;
	
	//Scores
	int leftscore = 0;
	int rightscore = 0;

	//Keys
	boolean updown = false;
	boolean downdown = false;
	boolean wdown = false; 
	boolean sdown = false;
	boolean enterdown = false;
	boolean f1down = false;
	boolean f2down = false;
	
	//Start screen
	boolean gameStart = true; // game loads up
	boolean pvpStart = false; //player v player
	boolean cvpStart = false; //comp v player
	
	//Pause game
	boolean gamePause = false;
	int originaltimer = 750;
	int timer = 750;
	int hesitate = 2500;
	int originalhesitate = 2500;
	boolean toComp = false;
		
	//Win situations
	int leftWinScore = 5;
	int rightWinScore = 5;
	
	//Font
	Font font, font2;
		
	Image backbuffer;
   	Graphics backg;
	Thread t;

/*====================================================================*/
	public void init(){

		addKeyListener(this);
		
		//Applet dimensions
		setSize(400,300);
		width = getSize().width;
      	height = getSize().height;

		//Right paddle position
		rpaddlex = width - rpaddlewidth * 2;
		rpaddley = (height / 2) - (rpaddleheight / 2) ;
		
		//Left paddle position
		lpaddley = (height / 2 ) - (lpaddleheight / 2);
		lpaddlex = lpaddlewidth;
		
		//Ball position
		bally = height / 2 - 10;
		ballx = width / 2;
	
		//Create a backbuffer
		backbuffer = createImage( width, height );
      	backg = backbuffer.getGraphics();
		drawToBackbuffer();

		font = new Font("Aerial", Font.BOLD, 20);
		font2 = new Font("Aerial", Font.PLAIN, 16);
		
		//Create a thread for animation loop
		t = new Thread(this);
		t.start();	 
	}
		
	public void update( Graphics g ) {
      	g.drawImage( backbuffer, 0, 0, this );
   	}

   	public void paint( Graphics g ) {
      	update( g );
   	}

/*====================================================================*/
	//Drawing stuff
	public void drawToBackbuffer(){

		//Draw background
		backg.setColor(Color.lightGray);
		backg.fillRect( 0,0, getSize().width, getSize().height); //filling the bg
		backg.setColor(Color.white);
		backg.drawRect(3,3,width-6,height-6); //draw that thin boundary of window
		
		//Draw ball
		backg.setColor(Color.black);
		backg.fillRect(ballx,bally,ballwidth,ballheight); //draw ball;
		
		//Draw paddles
		backg.setColor(Color.black);
		backg.fillRect(rpaddlex,rpaddley,rpaddlewidth,rpaddleheight);//draw right userpaddle 
		backg.fillRect(lpaddlex,lpaddley,lpaddlewidth,lpaddleheight);//draw left userpaddle
		
		//Game loads up, press ENTER to play
		if(gameStart == true){
			backg.drawString("Pong! 5 points to win!", width/2 - 110, height/2 - 55);
			backg.drawString("Press F1: HMN v HMN", width/2 - 105, height/2 - 35);
			backg.drawString("Press F2: COM v HMN", width/2 - 105, height/2 - 15);
			backg.drawString("CONTROLS", width/2 - 65, height/2+15);
			backg.drawString("HMN 1: W / S, HMN 2: Up / Down", width/2 - 130, height/2 + 30);
			if(f1down == true){
				pvpStart = true;
				gameStart = false;
			}
			if(f2down == true){
				cvpStart = true;
				gameStart = false;
			}
		}
		
		//Print winner... not working?
		if(leftscore >= leftWinScore){
			backg.drawString("Left side wins!", width/2, height/2);
		}
		if(rightscore >= rightWinScore){
			backg.drawString("Right side wins!", width/2, height/2);
		}
		
		backg.setFont(font);
		backg.drawString(""+leftscore, 100, 50);
		backg.drawString(""+rightscore, width-100, 50);
		backg.setFont(font2);
	
	repaint();
	}

/*====================================================================*/
	//Key presses
	public void keyPressed(KeyEvent ke){
		switch (ke.getKeyCode()) {
    		case KeyEvent.VK_UP: 
        		updown = true;	//we only change states of flags here	
			break;
   			case KeyEvent.VK_DOWN: 
       			downdown = true;
			break;				
			case KeyEvent.VK_W:
				wdown = true;
			break;
			case KeyEvent.VK_S:
				sdown = true;
			break;				
			case KeyEvent.VK_ENTER:
				enterdown = true;
			break;
			case KeyEvent.VK_F1:
				f1down = true;
			break;				
			case KeyEvent.VK_F2:
				f2down = true;
			break;
    	}		
	}
	
	public void keyReleased(KeyEvent ke){
		switch (ke.getKeyCode()) {
    		case KeyEvent.VK_UP: 
        		updown = false;		
			break;
   			case KeyEvent.VK_DOWN: 
       			downdown = false;
			break;				
			case KeyEvent.VK_W:
				wdown = false;
			break;
			case KeyEvent.VK_S:
				sdown = false;
			break;				
			case KeyEvent.VK_ENTER:
				enterdown = false;
			break;
			case KeyEvent.VK_F1:
				f1down = false;
			break;				
			case KeyEvent.VK_F2:
				f2down = false;
			break;
    	}
	}
	
	public void keyTyped(KeyEvent ke){}

/*====================================================================*/
	//Paddle updates
	public void updateUserPaddle(){

		//Left paddle
		if (wdown && lpaddley>0){
			lpaddley-=5;
		}
		if (sdown && lpaddley + lpaddleheight < height){
			lpaddley +=5;
		}		
		
		//Right paddle
		if(updown && rpaddley>0){ //only if arrow up is pressed and paddle not too close to top
			rpaddley-=5; 		// move paddle 	
		}
		if(downdown && rpaddley + rpaddleheight<height){  //same for bottom
			rpaddley+=5;
		}
	}

/*====================================================================*/
	public void updateCompPaddle(){
			
		//Left paddle, COMP paddle
		if ( lpaddley > bally && lpaddley>0){
			lpaddley-=3;
			if ( deltax < 0 ){
				lpaddley-=2;
			}
		}
		if ( lpaddley + lpaddleheight < bally + ballheight && lpaddley + lpaddleheight < height){
			lpaddley+=3;
			if ( deltax <0){
				lpaddley+=2;
			}
		}	
		
		//Right paddle, HUMAN paddle
		if(updown && rpaddley>0){ //only if arrow up is pressed and paddle not too close to top
			rpaddley-=5; 		// move paddle 	
		}
		if(downdown && rpaddley + rpaddleheight<height){  //same for bottom
			rpaddley+=5;
		}
	}

/*====================================================================*/
	//Ball updates
	public void updateBall(){

		ballx = ballx + deltax;   //increment ball position by delta
		bally = bally + deltay;

		//Ball hits left wall
		if(ballx<=0){	
			rightscore++;			//right side scores
			checkWin();
			deltax = originaldeltax;//change movement direction
			deltay = originaldeltay;
			ballx = width / 2;
			bally = height / 2;		//reset ball
			
			gamePause = true;
			while( timer > 0 ){
				timer--;
				//System.out.println(timer);
			}
			if( timer == 0 ){
				gamePause = false;
				timer = originaltimer;
				//System.out.println("gamePause = false;");
			}
		}
		
		//Ball hits right wall
		if(ballx + ballwidth >= width){ 
			leftscore++;			//left side scores
			checkWin();			
			deltax = -originaldeltax;		//change movement direction
			deltay = originaldeltay;
			ballx = width / 2;
			bally = height / 2;		//reset ball
			
			gamePause = true;
			while( timer > 0 ){
				timer--;
				//System.out.println(timer);
			}
			if( timer == 0 ){
				gamePause = false;
				timer = originaltimer;
				//System.out.println("gamePause = false;");
			}
		}
		
		//Ball hits top
		if(bally<=0){		
			bally = 0;
			deltay = -deltay;
		}
		
		//Ball hits bottom
		if(bally + ballheight >= height){
			bally = height-ballheight;
			deltay = -deltay;
		}
		
		// Ball hits left paddle
		if(ballx <= lpaddlex + lpaddlewidth){
			if(bally < lpaddley + lpaddleheight && bally + ballheight > lpaddley){
				if(bally > lpaddley + lpaddleheight - 25){
					if(deltay < 0){
						deltay = deltay - 1;
						//System.out.println("Ball yspeed:" + deltay);
					}else{
						deltay = deltay + 1;
						//System.out.println("Ball yspeed:" + deltay);
					}
				}
				if(bally + ballheight < lpaddley + 25){
					if(deltay < 0){
						deltay = deltay - 1;
						//System.out.println("Ball yspeed:" + deltay);
					}else{
						deltay = deltay + 1;
						//System.out.println("Ball yspeed:" + deltay);
					}
				}
				deltax = -deltax;
				if(deltax > -13 && deltax < 13){
					deltax++;
					//System.out.println("Ball xspeed:" + deltax);
				}
			}
		}
		
		// Ball hits right paddle
		if(ballx + ballwidth >= rpaddlex){
			if(bally < rpaddley + rpaddleheight && bally + ballheight > rpaddley){
				if(bally > rpaddley + rpaddleheight - 25){
					if(deltay < 0){
						deltay = deltay - 1;
						//System.out.println("Ball yspeed:" + deltay);
					}else{
						deltay = deltay + 1;
						//System.out.println("Ball yspeed:" + deltay);
					}
				}
				if(bally + ballheight < rpaddley + 25){
					if(deltay < 0){
						deltay = deltay + 1;
						//System.out.println("Ball yspeed:" + deltay);
					}else{
						deltay = deltay - 1;
						//System.out.println("Ball yspeed:" + deltay);
					}
				}
				deltax = -deltax;
				if(deltax > -13 && deltax < 13){
					deltax--;
					//System.out.println("Ball speed:" + deltax);
				}
			}
		}
	}

/*====================================================================*/
	//Check for win
	public void checkWin(){
		if(leftscore == leftWinScore){
			gameStart = true;
			backg.drawString("Left side wins!", width/2, height/2); //This isn't working either?
			leftscore = 0;
			rightscore = 0;
			pvpStart = false;
			cvpStart = false;
		}
		
		if(rightscore == rightWinScore){
			gameStart = true;
			backg.drawString("Right side wins!", width/2, height/2);
			leftscore = 0;
			rightscore = 0;
			pvpStart = false;
			cvpStart = false;
		}
	}
	
/*====================================================================*/
	//The whole animation loop
	public void run(){
		while(t!=null){
		
			if(gamePause == false && gameStart == false){
				if(pvpStart == true){ 
					updateBall();		
					updateUserPaddle();	
				}
				if(cvpStart == true){ 
					updateBall();
					updateCompPaddle();
				}
			}
			drawToBackbuffer();
			
			try{ //just in case something goes wrong
				Thread.sleep(20);
			}catch(InterruptedException ie){}
		}
	}
}