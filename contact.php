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
						<section id="contact">
							
							<h1 class="text-center">Contact</h1>
							
							<div class="text-center">
							<a href="mailto:mail@patfran.me">mail@patfran.me <span class="fa fa-paper-plane-o"></span></a><br/>
							<br/>
							<a href="https://www.linkedin.com/in/patfran" target="_blank">LinkedIn</a><br/>
							<a href="https://github.com/ppf3" target="_blank">GitHub</a><br/>
							<a href="https://500px.com/patrickfrancisco" target="_blank">500px</a><br/>
							<a href="https://www.facebook.com/the5souls" target="_blank">Facebook</a><br/>
							<a href="https://twitter.com/the5souls" target="_blank">Twitter</a><br/>
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
