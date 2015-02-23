
<?php
$con=mysqli_connect("sql2.njit.edu","tms25","101wildwood","tms25");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $result = mysqli_query($con,"SELECT * FROM ADMIN WHERE Username='$_POST[username]' AND Password='$_POST[password]'");
  $num_rows = mysqli_num_rows($result);
  
  session_start();

if($num_rows==1)
{
        // auth okay, setup session
        $_SESSION['auth'] = 'true';

        // redirect to required page
        header( "Location: Admin_track_search.php" ); //admin stuff
} 
else
{
        header( "Location: Login_Page.php" ); //sign in page
}
?>
<!---------------Original .php------------------->

<?php
/*
ob_start();
$host="sql2.njit.edu"; // Host name 
$username="tms25"; // Mysql username 
$password="101wildwood"; // Mysql password 
$db_name="tms25"; // Database name 
$tbl_name="ADMIN"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE Username='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
    session_register("myusername");
    session_register("mypassword"); 
    header("location:Login_Page.php");
    exit;
}
else {
    header("location:Login_Page.php");
echo "Wrong Username or Password. Try again.";
}
ob_end_flush();
?>

<!--------------------------------------------------->

<!-- 
</div>
</body>
</html>

-->