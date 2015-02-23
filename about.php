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

						<!--===== CONTACT =====-->
						<section id="about">
							
							<h1 class="text-center">About</h1>
							
							<img src="thumbnails/me.jpg" alt="A photo of me" class="center-block"/>
							<br/>
							
							<p>
							Hi! My name is Patrick Francisco, and I'm a digital artist living in the Greater New York City area. I graduated from New Jersey Institute of Technology in December 2014 with a degree in Information Technology. Adobe Photoshop and Adobe Premiere have been my main tools of the trade since high school, but I am always looking for new and cool digital outlets to express my creativity. As a matter of fact, I taught myself HTML and CSS over the past few months to develop this portfolio! Right now, I am currently learning more about virtual reality development using Unity3D and the Oculus Rift DK2, and my ultimate goal is to get hired within the VR industry to foster my design skills.
							</p>
							
							<a href="contact.php">Contact me!</a>
							
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
