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

        <form action="Normal_track_results.php" method="post">
        Tracking # <input type="text" name="SkidID" value="">
        <input type="submit" value="Track Flight">
        </form>

        <p></p>

        <form action="Admin_track_search.php" method="post">
	    <input type="submit" value="ADMIN SEARCH">
        </form>
 
 
    </div>
</body>
</html>

<!--
<form action="TEST_Insert.php" method="post">
SkidID: <input type="text" name="SkidID">
<input type="submit">
</form>
