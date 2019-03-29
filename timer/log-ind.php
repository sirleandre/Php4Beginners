<?php
/*  
session_start();
    //Do Anything
$_SESSION['username']= $username;//Initializing Session with value of PHP Variable
echo $_SESSION['username'];
*/

include('log-log.php'); //Include login script
     if((isset($_SESSION['email']) != ''))
     {
     header("Location: log-home.php");
     }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Login Form with Session</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>PHP Login Form with Session</h1>
<div class="loginBox">
<h3>Login Form</h3>
<br><br>
<form method="post" action="">
<label>Email:</label><br>
<input type="text" name="email" placeholder="email" /><br><br>
<label>Password:</label><br>
<input type="password" name="password" placeholder="password" /><br><br>
<input type="submit" name="submit" value="Login" />
</form>
<div class="error"><?php echo $error;?></div>
</div>
</body>
</html>
