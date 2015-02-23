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

    <form action="Admin_track_results.php" method="post"> 
    <select name = "category">
      <option value="FlightNumber">FlightNumber</option>
      <option value="Origin">Origin</option>
      <option value="Destination">Destination</option>
      <option value="DepartureTime">DepartureTime</option>
      <option value="ArrivalTime">ArrivalTime</option>
      <option value="SkidID">SkidID</option>
      <option value="CrewID">CrewID</option>
      <option value="TailNumber">TailNumber</option>
    </select>
    <input type="text" name="search">
    <input type="submit">
    </form>

        <p> OR </p>

                    <form action="carry_cargo.php" method="post">

            Find flight to carry cargo from  

            <select name = "origin">
              <option value="NWK">NWK</option>
              <option value="JFK">JFK</option>
              <option value="LGA">LGA</option>
            </select>

            to

            <select name = "destination">
              <option value="NWK">NWK</option>
              <option value="JFK">JFK</option>
              <option value="LGA">LGA</option>
            </select>

            <input type="submit">

            </form>


        <p> OR </p>

    <form action="Admin_browse_all_results.php" method="post">
	<input type="submit" value="Browse All Entries">
    </form>

                <p> OR </p>

    <form action="info.php" method="post">
	<input type="submit" value="Modify Entries">
    </form>
<!--------------------------------------------------->

</div>
</body>
</html>