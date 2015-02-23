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
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
	<div id="mainSmooth">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->	
		
        <!-- CONTAINER -->
		<div class="container">
		
			<!-- SIDEBAR, 4 columns wide -->
			<?php include("php/nav_index.php");?>
			
			<div class="row">
				<!-- CONTENT, 8 columns wide  -->
				<div id="content-wrap" class="col-md-8 col-md-offset-2">
					<div class="content">
					<!-- the meat of the content goes here -->
						
						
						
						<!--===== WORKS =====-->
						<section id="works">
						
							<h1 class="text-center">Works</h1>	
							
							<div class="workbar"> <!-- 2.2015 -->
								<a href="works/escape.php">
								<img src="thumbnails/escape-750.jpg" alt="Escape VR"/>
								<h4 class="workbar-caption">Escape (Oculus Rift VR)</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 12.2014 -->
								<a href="works/dating.php">
								<img src="thumbnails/datingapp-cards.jpg" alt="Dating App"/>
								<h4 class="workbar-caption">Dating App UX Report</h4>  
								</a>
							</div>
							
							<div class="workbar"> <!-- 3.2013 -->
								<a href="works/phonepromo.php">
								<img src="thumbnails/windowsphone-750.jpg" alt="Windows Phone"/>
								<h4 class="workbar-caption"><span class="fa fa-trophy"></span> Windows Phone Promotional Video</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 8.2013 -->
								<a href="works/spongebob.php">
								<img src="thumbnails/spongebob-750.jpg" alt="Spongebob"/>
								<h4 class="workbar-caption">Spongebob Sings Katy Perry's Roar</h4> 
								</a>
							</div>

							<div class="workbar"> <!-- 3.2014 -->
								<a href="works/xboxflyer.php">
								<img src="thumbnails/xboxmusic-750.jpg" alt="Xbox Music"/>
								<h4 class="workbar-caption"><span class="fa fa-trophy"></span> Xbox Music Promotional Flyer</h4> 
								</a>
							</div>	

							<div class="workbar"> <!-- 7.2012 -->
								<a href="works/1fort.php">
								<img src="thumbnails/1fort-750.jpg" alt="1fort"/>
								<h4 class="workbar-caption">1fort (Source Filmmaker)</h4> 
								</a>
							</div>	
							
							<div class="workbar"> <!-- 6.2014 -->
								<a href="works/truck.php">
								<img src="thumbnails/truck-750.jpg" alt="Truck Comp"/>
								<h4 class="workbar-caption">Truck Photo Composition</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 10.2014 -->
								<a href="works/rosetta.php">
								<img src="thumbnails/rosetta2-900.jpg" alt="Rosetta Scale"/>
								<h4 class="workbar-caption">Rosetta Image Scale</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 4.2014 -->
								<a href="works/drawing.php">
								<img src="thumbnails/bluegirl-750.jpg" alt="Girl in Blue"/>
								<h4 class="workbar-caption">Girl in Blue</h4> 
								</a>
							</div>
						
						</section>
						
						<hr>
						<?php include("php/footer.php");?>

					</div><!-- /content -->
				</div>
				<!-- /content-wrap -->
			</div>
		</div> 
		<!-- /END CONTAINER -->	
	
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.smoothState.js"></script>
	<script src="js/mySmoothjs.js"></script>
	
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
