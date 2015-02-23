<?php

session_start();

if($_SESSION['assignment_xml'])
{
	$assignment_xml = $_SESSION['assignment_xml'];
	$assignment = new SimpleXMLElement($assignment_xml);
}

if($_POST['selected_task'] != NULL)
{
	$_SESSION['selected_task'] = $_POST['selected_task'];
}

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
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type='text/javascript' src='/javascripts/jquery.tipsy.js'></script>

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
    <link rel="stylesheet" href="/stylesheets/tipsy.css" type="text/css" />

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

    
        <div class="tabs" > 
            <ul class="nav nav-tabs" style="width:100%; margin: auto; padding: 0; float: right;">
                <!--<li class="active"><a href="/class" class="active">Pending<span class="element-invisible">(active tab)</span></a></li>-->
                
                <li class="active"><a href="create.php" class="createtab" title="Create a new assignment, or continue where you left off">  &nbsp Create &nbsp<span class="element-invisible">(active tab)</span></a></li>
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

                                  
                            
<form action="proxy.php" method="post" id="create_question">
	<fieldset>								
		<?php							
		if($_SESSION['selected_task'] == "C")
		{
		?>

            <!--disabled stuff at the top-->
			<p>
				<label for="task_type">Task Type</label>
				<input type="text" name="task_type" id="task_type" value="Create Problem" disabled="disabled" />
			</p>
									
			<p>
				<label for="question_id">Question and Task ID</label>
				<input type="text" name="question_id" id="question_id" value="<?php echo "Q" . $_SESSION['current_question'] . " - " . "T" . $_SESSION['current_task'];?>" disabled="disabled" />
				<em>This is the current question you are creating combined with your current task step.</em>
			</p>
										
			<br><hr><br>
																				
			<p>
				<label for="C_question_type">Question Type:</label>
				<select id="C_question_type" name="C_question_type">
					
					<option value="Essay">Essay</option>
					<option value="Multiple_Choice">Multiple Choice</option>
					<option value="Programming">Programming</option>
                    <option value="Other">Other (additional options in future)</option>
				</select>
			</p>										

			<br><br>
										
			<p>
                

				<label for="C_instructions">Task Instructions:</label>
				<textarea name="C_instructions" rows="4" cols="50" required></textarea>
				<em>Enter the description/instructions for this task.</em>	
			</p>	
										
			<br><br>
										
			<p>
                

				<label for="C_duration">Duration:</label> 
				<input type="text" size="2" name="C_duration_days" id="C_duration_days" />
				<select id="days" name="days">
					<option value="">Days</option>
				</select><br>
											
				<input type="text" size="2" name="C_duration_hours" id="C_duration_hours" />
				<select id="hours" name="hours">
					<option value="">Hours</option> 
				</select> <em>Enter the maximum amount of time that this step will last.</em>	<br>
											
				<input type="text" size="2" name="C_duration_minutes" id="C_duration_minutes" />
				<select id="minutes" name="minutes">
					<option value="">Minutes</option>
				</select><br>
											
				
			</p>

			<br><br>										
										
			<p>
				<h3>Does this task get graded?</h3>
				<select id="C_graded" name="C_graded">
					<option value=""></option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</p>

			<p>
				<h3>What happens if users do not complete task on time?</h3>
				<select id="C_late" name="C_late">
					<option value=""></option>
					<option value="Opt1">The task is considered late</option>
					<option value="Opt2">The user forfeits right to complete the task any more</option>
					<option value="Opt3">The task is considered complete</option>
				</select>
			</p>

			<p>
				<h3>Who is assigned this task?</h3>
				<select id="C_assignee" name="C_assignee">
					<option value=""></option>
					<option value="Students">Students</option>
					<option value="Teacher">Teacher</option>
				</select>
			</p>											
		<?php									
		}	

		if($_SESSION['selected_task'] == "E")
		{
		?>
			<p>
				<label for="task_type">Task Type</label>
				<input type="text" name="task_type" id="task_type" value="Edit Problem" disabled="disabled" />
			</p>

			<p>
				<label for="question_id">Question and Task ID</label>
				<input type="text" name="question_id" id="question_id" value="<?php echo "Q" . $_SESSION['current_question'] . " - " . "T" . $_SESSION['current_task'];?>" disabled="disabled" />
				<em>This is the current question you are creating combined with your current task step.</em>
			</p>
										
			<br><hr><br>
										
			<p>
				<label for="E_duration">Duration:</label>
				<input type="text" size="2" name="E_duration_days" id="E_duration_days" />
				<select id="days" name="days">
					<option value="">Days</option>
				</select><br>
											
				<input type="text" size="2" name="E_duration_hours" id="E_duration_hours" />
				<select id="hours" name="hours">
					<option value="">Hours</option>
				</select> <em>Enter the maximum amount of time that this step will last.</em>	<br>
											
				<input type="text" size="2" name="E_duration_minutes" id="E_duration_minutes" />
				<select id="minutes" name="minutes">
					<option value="">Minutes</option>
				</select><br>
											
				
			</p>									

			<p>
				<h3>Does this task loop back to create problem until approved?</h3>
				<select id="E_loop" name="E_loop">
					<option value=""></option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</p>										
										
			<p>
				<h3>Does this task get graded?</h3>
				<select id="E_graded" name="E_graded">
                    <option value=""></option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</p>

			<p>
				<h3>What happens if users do not complete task on time?</h3>
				<select id="E_late" name="E_late">
					<option value=""></option>
					<option value="Opt1">The task is considered late</option>
					<option value="Opt2">The user forfeits right to complete the task any more</option>
					<option value="Opt3">The task is considered complete</option>
				</select>
			</p>	

			<p>
				<h3>Who is assigned this task?</h3>
				<select id="E_assignee" name="E_assignee">
					<option value=""></option>
					<option value="Students">Students</option>
					<option value="Teacher">Teacher</option>
				</select>
			</p>												
		<?php									
		}		
									
		if($_SESSION['selected_task'] == "S")
		{
		?>								
			<p>
				<label for="task_type">Task Type</label>
				<input type="text" name="task_type" id="task_type" value="Solve Problem" disabled="disabled" />
			</p>

			<p>
				<label for="question_id">Question and Task ID</label>
				<input type="text" name="question_id" id="question_id" value="<?php echo "Q" . $_SESSION['current_question'] . " - " . "T" . $_SESSION['current_task'];?>" disabled="disabled" />
				<em>This is the current question you are creating combined with your current task step.</em>
			</p>
										
			<br><hr><br>
										
			<p>
				<label for="S_duration">Duration:</label>
				<input type="text" size="2" name="S_duration_days" id="S_duration_days" />
				<select id="days" name="days">
					<option value="">Days</option>
				</select><br>
											
				<input type="text" size="2" name="S_duration_hours" id="S_duration_hours" />
				<select id="hours" name="hours">
					<option value="">Hours</option>
				</select><em>Enter the maximum amount of time that this step will last.</em><br>
											
				<input type="text" size="2" name="S_duration_minutes" id="S_duration_minutes" />
				<select id="minutes" name="minutes">
					<option value="">Minutes</option>
				</select><br>
											
					
			</p>									

			<p>
				<h3>Does this task get graded?</h3>
				<select id="S_graded" name="S_graded">
					<option value=""></option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</p>

			<p>
				<h3>What happens if users do not complete task on time?</h3>
				<select id="S_late" name="S_late">
					<option value=""></option>
					<option value="Opt1">The task is considered late</option>
					<option value="Opt2">The user forfeits right to complete the task any more</option>
					<option value="Opt3">The task is considered complete</option>
				</select>
			</p>

			<p>
				<h3>Who is assigned this task?</h3>
				<select id="S_assignee" name="S_assignee">
					<option value=""></option>
					<option value="Students">Students</option>
					<option value="Teacher">Teacher</option>
				</select>
			</p>												
		<?php									
		}									
									
		if($_SESSION['selected_task'] == "G")
		{
		?>								
			<p>
				<label for="task_type">Task Type</label>
				<input type="text" name="task_type" id="task_type" value="Grading" disabled="disabled" />
			</p>

			<p>
				<label for="question_id">Question and Task ID</label>
				<input type="text" name="question_id" id="question_id" value="<?php echo "Q" . $_SESSION['current_question'] . " - " . "T" . $_SESSION['current_task'];?>" disabled="disabled" />
				<em>This is the current question you are creating combined with your current task step.</em>
			</p>
										
			<br><hr><br>
										
			<p>
				<label for="G_duration">Duration:</label>
				<input type="text" size="2" name="G_duration_days" id="G_duration_days" />
				<select id="days" name="days">
					<option value="">Days</option>
				</select><br>
											
				<input type="text" size="2" name="G_duration_hours" id="G_duration_hours" />
				<select id="hours" name="hours">
					<option value="">Hours</option>
				</select><em>Enter the maximum amount of time that this step will last.</em><br>
											
				<input type="text" size="2" name="G_duration_minutes" id="G_duration_minutes" />
				<select id="minutes" name="minutes">
					<option value="">Minutes</option>
				</select><br>
											
			</p>	

			<p>
				<h3>Does this task get graded?</h3>
				<select id="G_graded" name="G_graded">
					<option value=""></option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</p>

			<p>
				<h3>What happens if users do not complete task on time?</h3>
				<select id="G_late" name="G_late">
					<option value=""></option>
					<option value="Opt1">The task is considered late</option>
					<option value="Opt2">The user forfeits right to complete the task any more</option>
					<option value="Opt3">The task is considered complete</option>
				</select>
			</p>	

			<p>
				<h3>Who is assigned this task?</h3>
				<select id="G_assignee" name="G_assignee">
					<option value=""></option>
					<option value="Students">Students</option>
					<option value="Teacher">Teacher</option>
				</select>
			</p>												
		<?php									
		}									
		?>
									
		<br><br><br>
									
		<input type="submit" name="submit" value="Submit" class="dark" />
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		<a href="index.php" class="dark button">Save but do not submit</a>
		&nbsp &nbsp
		<a href="restart.php" class="dark button">Cancel without saving</a>
									
	</fieldset>	
</form>






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
<div id="footer-content" class="row-fluid footer-content"> 
<div class="region region-footer clearfix">
<div id="block-system-powered-by" class="clearfix block block-system">       
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
