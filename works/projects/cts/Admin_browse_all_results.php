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
 
$result = mysqli_query($con,"SELECT * FROM Flight");


echo "<table border='1'>
<tr>
<th>FlightNumber</th>
<th>Origin</th>
<th>Destination</th>
<th>DepartureTime</th>
<th>ArrivalTime</th>
<th>SkidID</th>
<th>CrewID</th>
<th>TailNumber</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
	echo "<td>" . $row['FlightNumber'] 	. 	"</td>";
	echo "<td>" . $row['Origin'] 		. 	"</td>";
	echo "<td>" . $row['Destination'] 	. 	"</td>";
	echo "<td>" . $row['DepartureTime'] . 	"</td>";
	echo "<td>" . $row['ArrivalTime'] 	. 	"</td>";
	echo "<td>" . $row['SkidID'] 		. 	"</td>";
	echo "<td>" . $row['CrewID'] 		. 	"</td>";
	echo "<td>" . $row['TailNumber'] 	. 	"</td>";
  echo "</tr>";
  }
echo "</table>";

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