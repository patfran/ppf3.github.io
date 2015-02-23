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
 
mysqli_query($con,"UPDATE Flight 
SET Origin='$_POST[Origin1]', Destination='$_POST[Destination1]',
	DepartureTime='$_POST[DepartureTime1]', ArrivalTime='$_POST[ArrivalTime1]', SkidID='$_POST[SkidID1]', 
	CrewID='$_POST[CrewID1]', TailNumber='$_POST[TailNumber1]'
	WHERE FlightNumber='$_POST[FlightNumber1]'");

echo "Flight " . $_POST[FlightNumber1] . " info edited!";

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