<?php
include('log-log.php'); //Include login script
     if((isset($_SESSION['email']) != ''))
     {
     header("Location: log-home.php");
     }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns=”http://www.w3.org/1999/xhtml” xml:lang=”en” lang=”en”>

<head>
<title> ..: Account Form :.. </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Social Network">
<meta name="author" content="SANGWA Leandre">

<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="">
<style>

@import url(https://fonts.googleapis.com/css?family=Raleway);

#main{
width:400px;
margin:20px auto;
font-family: 'Raleway', sans-serif;

  }
  a,
  a:hover,
  a:visited {
  color:  #9B59B6;
  cursor: pointer;
  text-decoration: none;
  }
  a:hover {
  text-decoration: underline;
  }
}


legend{
color: #9B59B6;
text-align:center;
margin: -10px -10px;
padding: 15px;
}
#login{
width:300px;
border-radius: 10px;
font-family:raleway;
border: 2px solid #ccc;
padding: 10px 40px 25px;
margin-top: 50px;
}

input[type=password],input[type=email]{
width:95%;
padding: 10px;
margin-top: 8px;
border: 1px solid #9B59B6;//color border
padding-left: 5px;
font-size: 16px;
border-radius: 5px;
font-family:raleway;
}

input[type=submit]{
width: 100%;
background-color:#9B59B6;
color: white;
border: 2px solid #9B59B6;
padding: 10px;
font-size:20px;
cursor:pointer;
border-radius: 5px;
margin-bottom: -12px;
}
.login:hover {
  background-color: #B95FF6;/*color for hover link*/
  border: 2px solid #9B5FF6;
}

h2{
background-color: #9B59B6;
color: white;
text-align:center;
border-radius: 10px 10px 0 0;
margin: -10px -40px;
padding: 15px;
}

hr{
border:0;
border-bottom:1px solid #ccc;
margin: 10px -40px;
margin-bottom: 30px;
}

#create{
float:right;
padding-right: 20px;
}
h1 {
margin-left: -63px;
}

.bg {
  background-color: #f1f1f1;
}

.error{
  color: red;
  margin-left: 80px;
}
</style>

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
<body class="bg">
<div id="main">
<!--Insert data into database-->
<div id="login">
<h2>Sano's Account</h2>
<hr/>
<form action="" method="post">
<label>User Account :</label>
<input type="email" name="email" id="phone"  required="required" placeholder="E-mail/Phone" autofocus/></br></br>
<label>Password :</label>
<input type="password" name="name" id="pass" required="required" placeholder="Please Enter Your Password" pattern="[a-zA-Z0-9] {,}"/></br></br>
<input type="submit" value=" Login " name="submit" class="login"/></br>
</form>
</div>
<!-- Bottom center side div -->
<div id="create">
<a href="/sano/logTot/create_account.html" class="new"><img src="create.jpg" alt="New Account"></a>
</div>
<div id="forget">
<a href="/sano/logTot/forget_password.html" class="fog"><img src="forget.jpg" alt="Forgot Pass"></a>
</div>
<div class="error"><?php echo $error;?></div>
</div>
<!-- Beginning footer -->

</body>
</html
