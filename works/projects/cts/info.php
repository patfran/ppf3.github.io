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

<form action="add_info.php" method="post">
Add New Flight Information: 
<br>
<input type="text" name="Origin" placeholder="Origin">
<input type="text" name="Destination" placeholder="Destination">
<input type="text" name="DepartureTime" placeholder="Departure Time">
<input type="text" name="ArrivalTime" placeholder="Arrival Time">
<input type="text" name="SkidID" placeholder="Skid ID">
<input type="text" name="CrewID" placeholder="Crew ID">
<input type="text" name="TailNumber" placeholder="Tail Number">
<br>
<input type="submit" value="Add">
</form>

<p></p>


<form action="edit_info.php" method="post">
Edit Existing Flight Information: 
<br>
<input type="text" name="FlightNumber1" placeholder="Flight Number">
<input type="text" name="Origin1" placeholder="Origin">
<input type="text" name="Destination1" placeholder="Destination">
<input type="text" name="DepartureTime1" placeholder="Departure Time">
<input type="text" name="ArrivalTime1" placeholder="Arrival Time">
<input type="text" name="SkidID1" placeholder="Skid ID">
<input type="text" name="CrewID1" placeholder="Crew ID">
<input type="text" name="TailNumber1" placeholder="Tail Number">
<br>
<input type="submit" value="Edit">
</form>

<p></p>


<form action="admin_delete.php" method="post">
Select value to remove:
<select name = "category">
  <option value="FlightNumber">Flight - FlightNumber</option>
  <option value="SkidID">Cargo - SkidID</option>
  <option value="CrewID">Aircew - CrewID</option>
  <option value="TailNumber">Aircraft - TailNumber</option>
</select>
<input type="text" name="delete">
<input type="submit"  value="Delete">
</form>



<!--------------------------------------------------->

    <p></p>
    <form action="Admin_track_search.php" method="post">
	<input type="submit" value="NEW SEARCH">
    </form>

</div>
</body>
</html>