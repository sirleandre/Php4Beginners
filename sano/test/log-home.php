<?php
  include('log-check.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Profile</title>
<meta name="description" content="Social Network">
<meta name="author" content="SANGWA Leandre">

<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="">

<!-- Internet Explorer HTML5 enabling code: -->
        
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        
        <style type="text/css">
        .clear {
          zoom: 1;
          display: block;
        }
        </style>

        
        <![endif]-->
</head>
<body>
<div id="main">
<h1>My Profile Account</h1>
<h2 class="hello"><br><?php echo $login_name;?>Your email is: <em><?php echo $login_user;?>!</em></h2>
<a href="ibisekuru.html"><img src="ibisekuru.jpg" alt="Ibisekuru"></a>
<a href="#"><img src="sewabo.jpg" alt="Se-wabo"></a><!-- Uncle frm father-->
<a href="#"><img src="nyirarume.jpg" alt="Nyirarume"></a><!-- Uncle frm mother-->
<a href="#"><img src="nyirasenge.jpg" alt="Nyirasenge"></a><!-- Aunt frm father-->
<a href="#"><img src="nyina_wabo.jpg" alt="Nyina-wabo"></a><!-- Aunt frm mother-->
<a href="#"><img src="bavandimwe.jpg" alt="Bavandimwe"></a>
<a href="#"><img src="bishywa.jpg" alt="Bishywa"></a>
<a href="#"><img src="ababyara.jpg" alt="Ababyara"></a>
<a href="#"><img src="abisengeneza.jpg" alt="Abisengeneza"></a>
<a href="#"><img src="baramu.jpg" alt="Baramu"></a>
<a href="#"><img src="basanzire.jpg" alt="Basanzire"></a>
</div>

<br><br>
<a href="log-logout.php" style="font-size:18px">Logout?</a>
</body>
</html
