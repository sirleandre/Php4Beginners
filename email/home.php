<?php /*
    include("check.php"); */
    /* home.php */
    if( !isset( $_SESSION ) ) session_start();
    if( !isset( $_SESSION[ 'username' ] ) ) exit( header('Location: ind.php') );
    include("check.php");  /* serves no real purpose once session is set */ 
?>   
 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <h1 class="hello">Hello, <em><?php /*echo $login_user; */ echo $_SESSION['username'];?>!</em></h1>
        <br><br><br>
    <a href="logout.php" style="font-size:18px">Logout?</a>
</body>
</html>
