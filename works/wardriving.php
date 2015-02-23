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
					
					
					
					
						<h1>War Driving Project (12.2014)</h1>
						
						<p>
						Our group researched and demonstrated war driving techniques for our "Wireless Networks" course. War driving is an approach that a person may take to find gaps in a network's security (such as Wi-Fi in an office building or a neighbor's house). With the data gathered from war driving, attackers may examine the data to find weak networks to infiltrate at a later date.</p>
						
						<p>
						However, war driving in itself is not illegal since the person or people are not necessarily gaining unauthorized access to a network, but rather they are just scanning signals that are freely floating in the air. Much of this data is often gathered and uploaded to websites, such as <a href="wigle.net">wigle.net</a>.
						</p>

						<p>
						After familiarizing ourselves with general cyber attack approaches, we drove around to see how vulnerable the Newark area is for network attacks. Then, as a small side project, we set up one of our spare wireless routers to see just how easy it is to connect to a weak network. We compiled everything and presented all of our findings to the class.
						</p>

						<p>
						Below are our video and slides that we used for our class presentation.
						</p>
						
						<p>
						The video was shot with a Canon T2i, and edited using Adobe Premiere.
						</p>
						
						<div class="embed-responsive embed-responsive-4by3">
						<iframe class="embed-responsive-item" src="//www.youtube.com/embed/k79-hs5r_io" allowfullscreen></iframe>
						</div>
						
						<div class="embed-responsive embed-responsive-4by3">
						<iframe class="embed-responsive-item" src="https://docs.google.com/presentation/d/11B9HT2aLJqLNXy08mwEg66RIIVvE6IzOehxmdemVBss/embed?start=false&loop=false&delayms=3000" frameborder="0" width="529" height="426" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
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
