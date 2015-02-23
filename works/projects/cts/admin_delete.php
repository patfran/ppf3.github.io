<?php 
  session_start();
	if(!$_SESSION['auth']==true)
	{
		header("Location: Login_Page.php"); //if regualar tries to use, kciks to signin page
	}
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Cargo Transportation System</title>
    <link href="Site.css" rel="stylesheet">
</head>

<body>
    <?php include("Header.php");?>
    <div id="main">

    <h1>Cargo Transportation System</h1> 
    <h2>TRACK (Admin)</h2>
    <p>Track various things using your Tracking #</p>

<!---------------Original .php------------------->

<?php
$con=mysqli_connect("sql2.njit.edu","tms25","101wildwood","tms25");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
$delete = $_POST['delete'];

$category = $_POST['category'];

$table = "";

if ($category = "FlightNumber")
{
	$table = "Flight";
}
else if ($category = "SkidID")
{
	$table = "Cargo";
}
else if ($category = "CrewID")
{
	$table = "Aircrew";
}
else if ($category = "TailNumber")
{
	$table = "Aircraft";
}

$test = mysqli_query($con,"SELECT * FROM $table WHERE $category=$delete");
$rows = mysqli_num_rows($test);

if ($rows > 0)
{
	mysqli_query($con,"DELETE FROM $table WHERE $category=$delete");
	echo "The specified value was successfully removed.";
}
else
{
	echo "The specified value does not exist.";
}

mysqli_close($con);
?> 

<!--------------------------------------------------->

    <p></p>
    <form action="Admin_track_search.php" method="post">
	<input type="submit" value="NEW SEARCH">
    </form>

</div>
</body>
</html>