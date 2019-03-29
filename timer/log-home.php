<?php
  include('log-check.php');
  //include('log-check-name.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1 class="hello">Hello,<br><?php echo $login_name;?>Your email is: <em><?php echo $login_user;?>!</em></h1>
<br><br><br>
<a href="log-logout.php" style="font-size:18px">Logout?</a>
</body>
</html>
