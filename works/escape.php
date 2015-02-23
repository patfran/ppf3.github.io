<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Patrick Francisco">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Patrick Francisco</title>

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CORE BOOTSTRAP CSS -->
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../fonts/font-awesome-4.3.0/css/font-awesome.min.css">
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
	<div id="mainSmooth">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->	
		
        <!-- CONTAINER -->
		<div class="container">
		
			<!-- SIDEBAR, 4 columns wide -->
			<?php include("../php/nav_pages.php");?>
			
			<div class="row">
				<!-- CONTENT, 8 columns wide  -->
				<div id="content-wrap" class="col-md-8 col-md-offset-2">
					<div class="content">
					<!-- the meat of the content goes here -->
						
					
					
							<h1>Escape (Oculus Rift VR)</h1>
							
							<p>
							A short game inspired by old point-and-click "Escape the Room" Flash games. I used this opportunity to learn more about virtual reality development using the Unity3D game engine.
							</p>
							
							<p>
							According to Oculus's <a href="http://static.oculus.com/sdk-downloads/documents/Oculus_Best_Practices_Guide.pdf">Best Practices Guide</a>, the most comfortable VR experiences are ones that involve no self-motion. In this demo, the player does not move at all except to move his or her head to look around. The chair and the surrounding objects are positioned in a way where the player never has to turn a full 180-degrees.
							</p>
							
							<p>
							I developed a "world cursor" to allow the player to interact with the environment with just the mouse. The cursor's movement is independent from the movement of the player's head. 
							</p>
							
							<p>
							If you have the Oculus Rift DK2, you can download the Escape demo below to try it for yourself!
							</p>
							
							<br>
								<a href="escape/Escape_v1.0.zip" download><h4><strong> --> Download Escape_v1.0 (Oculus Rift DK2 recommended) <-- </strong></h4></a>
							<br>
							<div class="works-pics">
								<img src="img/escape.jpg" alt="Escape VR"></img>
							</div>
						
						
						<hr>
						<?php include("../php/footer.php");?>

					</div><!-- /content -->
				</div>
				<!-- /content-wrap -->
			</div>
		</div> 
		<!-- /END CONTAINER -->	
	
	</div>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.smoothState.js"></script>
	<script src="../js/mySmoothjs.js"></script>
	
		<!-- Google Analytic stuff -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-59716201-1', 'auto');
	  ga('send', 'pageview');
	</script>
		
    </body>
</html>
