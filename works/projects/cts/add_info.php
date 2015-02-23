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
 
mysqli_query($con,"INSERT INTO Flight (Origin, Destination, DepartureTime, ArrivalTime, SkidID, CrewID, TailNumber) 
VALUES ('$_POST[Origin]', '$_POST[Destination]', '$_POST[DepartureTime]', '$_POST[ArrivalTime]', '$_POST[SkidID]', '$_POST[CrewID]', '$_POST[TailNumber]')");

echo "New flight info added!";

mysqli_close($con);
?> 

<!--------------------------------------------------->

    <p></p>
    <form action="Admin_track_search.php" method="post">
	<input type="submit" value="NEW SEARCH">
    </form>

</div>
</body>
</html