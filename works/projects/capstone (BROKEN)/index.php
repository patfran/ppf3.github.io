<?php

session_start();

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>


<!-- stuff that was already there-->
<div><!--
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="http://ec2-54-224-208-213.compute-1.amazonaws.com/misc/favicon.ico" type="image/vnd.microsoft.icon" />
    <meta name="Generator" content="Drupal 7 (http://drupal.org)" />
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=10.0,initial-scale=1.0">
    <title>CLASS Learning System | CLASS Learning System</title>
  
    
    <style type="text/css" media="all">@import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/system/system.base.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/system/system.menus.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/system/system.messages.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/system/system.theme.css?mvfty8");</style>    
    <style type="text/css" media="all">@import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/comment/comment.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/modules/date/date_api/date.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/field/theme/field.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/node/node.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/search/search.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/modules/user/user.css?mvfty8");</style>
    <style type="text/css" media="all">@import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/bootstrap/css/bootstrap.min.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/bootstrap/css/bootstrap-responsive.min.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/fontawesome/css/font-awesome.min.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/css/open_framework.css?mvfty8");
    @import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/css/ie.css?mvfty8");</style>
    <style type="text/css" media="print">@import url("http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/css/open_framework_print.css?mvfty8");</style>

    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/js/jquery-1.9.1.min.js?v=1.9.1"></script>
    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/js/jquery-migrate-1.1.1.min.js?v=1.1.1"></script>
    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/misc/jquery.once.js?v=1.2"></script>
    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/misc/drupal.js?mvfty8"></script>
    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/misc/tableheader.js?mvfty8"></script>
    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/bootstrap/js/bootstrap.min.js?mvfty8"></script>
    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/js/open_framework.js?mvfty8"></script>
    <script type="text/javascript" src="http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/js/override.js?mvfty8"></script>
    <script type="text/javascript">


    <!--//--><![CDATA[//><!--
    jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"open_framework","theme_token":"WhzbMxIACHzvghd4tljxpTfGiWETprJktoJmzGB5KvY","js":{"misc\/jquery.js":1,"sites\/all\/themes\/open_framework-7.x-2.04\/js\/jquery-migrate-1.1.1.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"misc\/tableheader.js":1,"sites\/all\/themes\/open_framework-7.x-2.04\/bootstrap\/js\/bootstrap.min.js":1,"sites\/all\/themes\/open_framework-7.x-2.04\/js\/open_framework.js":1,"sites\/all\/themes\/open_framework-7.x-2.04\/js\/override.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"modules\/comment\/comment.css":1,"sites\/all\/modules\/date\/date_api\/date.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/themes\/open_framework-7.x-2.04\/bootstrap\/css\/bootstrap.min.css":1,"sites\/all\/themes\/open_framework-7.x-2.04\/bootstrap\/css\/bootstrap-responsive.min.css":1,"sites\/all\/themes\/open_framework-7.x-2.04\/fontawesome\/css\/font-awesome.min.css":1,"sites\/all\/themes\/open_framework-7.x-2.04\/css\/open_framework.css":1,"sites\/all\/themes\/open_framework-7.x-2.04\/css\/ie.css":1,"sites\/all\/themes\/open_framework-7.x-2.04\/css\/open_framework_print.css":1}}});
    //--><!]]>
</script>
</div>



<!-- SCRIPT STUFF -->
<div>
    <link rel="stylesheet" href="/jquery/jquery-ui.css" />
    <script type='text/javascript' src="/jquery/jquery-1.11.2.js"></script>
    <script type='text/javascript' src="/jquery/jquery-ui.js"></script>
    <script type='text/javascript' src='/jquery/jquery.tipsy.js'></script>

    <link rel="stylesheet" href="/resources/demos/style.css" />
    <link rel="stylesheet" type="text/css" href="mystyles.css">

    
  
    <!-- dialog popup box script-->
    <script>
      $(function() {
        $( "#dialog-modal" ).dialog({
          height: 140,
          modal: true
        });
      });
    </script>

    <!-- calendar script -->
    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    </script>

    <!-- tab script -->
    <script>
        $(function() {
            $( "#tabs" ).tabs();
            $( "#tabs-centre" ).tabs();
            $( ".ui-tabs-panel" ).css("background", "none");
        });
    </script>
        
    <!-- only numbers script-->
    <script language = Javascript>
        function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
                return true;
        }
    </script>

    <!-- tooltip script 
    <script>
        $(function () {

            $( document ).tooltip({
                position: {
                    my: "left center",
                    at: "right+15 center",
                    using: function (position, feedback) {
                        $(this).css(position);
                        $("<div>")
                    .addClass("arrow")
                    .addClass(feedback.vertical)
                    .addClass(feedback.horizontal)
                    .appendTo(this);
                    }
                }
            });


        });
    </script>-->

    <!-- tipsy tooltip -->
    <script type='text/javascript' src='/javascripts/jquery.tipsy.js'></script>
    <link rel="stylesheet" href="/jquery/tipsy.css" type="text/css" />

    <script type='text/javascript'>
        $(function() {
            // $('a[rel=tipsy]').tipsy({fade: true, gravity: 'n'});
            $('.assignmentName').tipsy({gravity: 'w', offset:15, opacity: 0.9});
            $('.assignmentDesc').tipsy({gravity: 'w', offset:15, opacity: 0.9});
            $('.createtab').tipsy({gravity: 'n', offset:15, opacity: 0.9});
            $('.viewtab').tipsy({gravity: 'n', offset:15, opacity: 0.9});
            $('.importtab').tipsy({gravity: 'n', offset:15, opacity: 0.9});
        });
    </script>
    
</div>



</head>




<body class="html front logged-in one-sidebar sidebar-first page-class   show-title  show-breadcrumb   " >

<!-- bar at the top -->
<div id="admin-shortcuts" class="admin-shortcuts clearfix"> 
    <ul class="menu nav">
        <li class="first leaf"><a href="index.php">Home</a></li>
    </ul>
</div>


<!-- /#admin-shortcuts + logo and name -->
<div id="header" class="clearfix header" role="banner" >
<div class="container" >
<div class="row">
<div class="span12" >

    <!-- /#logo -->
    <div id="logo" class="site-logo" > 
        <a href="index.php" rel="home"> 
        <img src="http://ec2-54-224-208-213.compute-1.amazonaws.com/sites/all/themes/open_framework-7.x-2.04/logo.png" alt="CLASS Learning System" role="presentation" /> </a>
    </div>
        
    <!-- /#name-and-slogan -->
    <div id="name-and-slogan">
        <div id="site-name" class="site-name">
            <a href="index.php" rel="home">CLASS Learning System</a>
        </div>
    </div>
            
    <hr> 

</div>
</div>
</div>
</div>



<!-- /#main-menu -->
<div id="main" class="clearfix main" role="main">
<div class="container">
<div id="main-content" class="row main-content">

<!-- START /#sidebar-first -->
<div id="sidebar-first" class="sidebar span3 site-sidebar-first" >
<div class="row-fluid" >
<div class="region region-sidebar-first clearfix">
<div id="block-system-navigation" class="clearfix block block-system block-menu"  >

    <div class="content"> 


		<input readonly class="assignmentName" placeholder="Name" value="<?php echo $_SESSION['assignment_name'] ?>" title="Your assignment's name will automatically appear here when created."/> <br><br>        
        <textarea readonly class="assignmentDesc" placeholder="Description" title="Your assignment's description will automatically appear here when created." rows="10"><?php echo $_SESSION['assignment_description'] ?></textarea><br><br>
      
        <hr><!--
        <div style="width:100%; margin: auto; padding: 0; float: left;">
            <ul class="nav nav-pills" >      
                <li class=""><a href="create.php" title="Create a new assignment">      &nbsp Create &nbsp  </a></li>
                <li class=""><a href="view.php" title="View your current assignment">   &nbsp View &nbsp    </a></li>
                <li class=""><a href="import.php" title="Load a previous assignment">   &nbsp Import &nbsp  </a></li>
                <!--<li class="active"><a href="/class" class="active">Pending<span class="element-invisible">(active tab)</span></a></li>
            </ul> 
        </div>
        <hr>-->

    </div>

</div>
</div>
</div>
</div>
<!-- END /#sidebar-first -->


<div id="content" class="mc-content span9" >
<div id="content-wrapper" class="content-wrapper" >

<div id="content-head" class="row-fluid content-head">
    <div id="highlighted" class="clearfix">
    </div>

    
        <div class="tabs"> 
            <ul class="nav nav-tabs" style="margin-right: 100px; padding-right: 100px; width:100%; margin: auto; padding: 0; float: right;">
                <!--<li class="active"><a href="/class" class="active">Pending<span class="element-invisible">(active tab)</span></a></li>-->
                
                <li ><a href="create.php" class="createtab" title="Create a new assignment, or continue where you left off">  &nbsp Create &nbsp</a></li>
                <li ><a href="view.php" class="viewtab" title="View your current assignment">    &nbsp View &nbsp</a></li>
                <li ><a href="import.php" class="importtab" title="Load a previous assignment">  &nbsp Import &nbsp</a></li>
            </ul> 
        </div>
                
</div>
                                        
    
<div id="content-body" class="row-fluid content-body" >
<div class="region region-content clearfix">
<div id="block-system-main" class="clearfix block block-system">      
<div class="content"> 

<!------------------------------------------------------------->






        <h2 style="text-align: center;"> Welcome to the CLASS capstone project!</h2>

        <p style="text-align: center;">Starting the final merging product.</p> 

        <p style="text-align: center;"> Click on CREATE to begin </p>
        




<!------------------------------------------------------------->
</div>
</div>
</div>
<!-- /.region -->
</div>
</div>
<!-- /#content-wrap --> 
</div>


<!-- /#content -->
</div>
</div>
</div>
<!-- /#main, /#main-wrapper -->




<!-- START /#footer -->
<div id="footer" class="clearfix site-footer" role="contentinfo">
<div class="container">
<div id="footer-content" class="row-fluid footer-content" > 
<div class="region region-footer clearfix">
<div id="block-system-powered-by" class="clearfix block block-system" >       
<div class="content"> <span>Powered by <a href="http://drupal.org">Drupal</a></span> </div>
</div>
</div>
<!-- /.region -->
</div>
</div>
</div>
<!-- END /#footer -->
  
</body>
</html>
