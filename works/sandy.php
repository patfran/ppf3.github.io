<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Patrick Francisco">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Patrick Francisco - Portfolio</title>

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CORE BOOTSTRAP CSS -->
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../font-awesome-4.3.0/css/font-awesome.min.css">
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
		
		<!-- 
		Definitely not focused on optimization at the moment. 
		Becoming comfortable with HTML, CSS, and etc. is my first and foremost objective.
		-->
		
    </head>
    <body data-spy="scrollspy" data-target="#side-nav">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
        <!-- CONTAINER -->
		<div class="container">	
			<div class="row">
			
				<!-- SIDEBAR -->
				<?php include("../nav_pages.php");?>
				<!-- /END SIDEBAR -->

				<!-- CONTENT -->
				<div id="content-wrap" class="col-md-8">
					<div class="content">
					
					
					
					
						<h1>Superstorm Sandy (11.2012)</h1>
						
						<p>
						After Superstorm Sandy landed in the New Jersey area on October 29, 2013, gas suddenly became a scarce resource. Cars were lined up across town, and people waited several hours just to buy a gallon of gas. This chaos lasted for nearly 3 days. I decided to document the entire event.
						</p>
						
						<p>
						Photos and videos taken with a Canon T2i. Edited using Adobe Photoshop and Adobe Premiere.
						</p>
						
						<div id="truck-pics">
							<img src="img/sandy/1.jpg"/>
							<img src="img/sandy/3.jpg"/>
							<img src="img/sandy/4.jpg"/>
							<img src="img/sandy/5.jpg"/>
							<img src="img/sandy/6.jpg"/>
							<img src="img/sandy/7.jpg"/>
						</div>
						
						<br>
						<br>
						<p>Bonus footage of the aftermath and the long gas lines on the Garden State Parkway.</p>
						<div class="embed-responsive embed-responsive-4by3">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3LbjtX73dSE" allowfullscreen></iframe>
						</div>	
						<div class="embed-responsive embed-responsive-4by3">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WfacauqAWXs" allowfullscreen></iframe>
						</div>	
						
						
						
					</div>
					<hr>
					<address>
						<h6>
							<small> <a href="mailto:ppf3@njit.edu"><span class="glyphicon glyphicon-envelope"></span>	Patrick Francisco 2015 </a></small>
						</h6>
					</address>
				</div>
				<!-- /END CONTENT -->

			</div>
		</div> 
		<!-- /END CONTAINER -->
	
		<!-- added the following two line for bootstrap -->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		
		<!-- tracks active scroll thing -->
		<script>
			$('body').scrollspy({
				target: '#side-nav'
			})
		</script>
		
		<!-- scrolling animation -->
		<script>
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
					|| location.hostname == this.hostname) {

					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					   if (target.length) {
						 $('html,body').animate({
							 scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		</script>
		
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
