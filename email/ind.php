<?php 
    $error='';
    if( !isset( $_SESSION ) ) session_start();

    if( !isset( $_SESSION['username'] ) ) 
  
    include( 'login.php' );
    else exit( header('Location: home.php') ); 
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
<label>Username:</label><br>
<input type="text" name="username" required="required" placeholder="username" /><br><br>
<label>Password:</label><br>
<input type="password" name="password" required="required" placeholder="password" />  <br><br>
<input type="submit" value="Login" /> 
</form>
<div class="error"><?php echo $error;?></div>
</div>
</body>
</html>
