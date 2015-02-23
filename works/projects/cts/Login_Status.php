<?php 
require("Login_Check.php");  
$id = $_SESSION['user']; //Get user's ID 
$result = mysql_query("SELECT * FROM `users` where id='$id'"); 
$row = mysql_fetch_assoc($result); 

echo "Your user name is: <br>"; 
echo $row['fname']; 
echo " and you registered at: <br>"; 
echo $row['date']; 


?>

<p>Track various things using your Tracking #</p>