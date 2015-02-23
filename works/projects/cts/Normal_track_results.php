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
        <h2>TRACK</h2>
        <p>Track your cargo using your Tracking #</p>

<!---------------Original Insert.php------------------->
<?php
$con=mysqli_connect("sql2.njit.edu","tms25","101wildwood","tms25");

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

    $id = $_POST['SkidID'];
    $result = mysqli_query($con,"SELECT SkidID, FlightNumber FROM Flight WHERE SkidID=$id");

    echo "
    <table border='1'>
    <tr>
    <th>Tracking #/SkidID</th>
    <th>Flight Number</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['SkidID'] . "</td>";
    echo "<td>" . $row['FlightNumber'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

//Close connection
mysqli_close($con);
?> 
<!--------------------------------------------------->

    <p></p>
    <form action="Normal_track_search.php" method="post">
	<input type="submit" value="NEW SEARCH">
    </form>

</div>
</body>
</html>