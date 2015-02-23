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
    <h2>LOGIN</h2>
    <p>Login using your username and password.</p>

        <form action="Login_Check.php" method="post">
        Username: 
        <input type="text" name="username"><br>
        Password:
        <input type="password" name="password"><br>
        <input type="submit" value="Login">
        </form>
 
    </div>
</body>
</html>