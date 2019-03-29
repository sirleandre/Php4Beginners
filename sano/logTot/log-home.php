<?php
  include('log-check.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns=”http://www.w3.org/1999/xhtml” xml:lang=”en” lang=”en”>

<head>
<title>..: Profile :..</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Social Network">
<meta name="author" content="SANGWA Leandre">

<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>

  .logout {
        margin: auto;
        position: absolute; right: 25px; top: 30px; width: 80px; height: 20px;
        background-color: white;
        border-radius: 5px;
        text-align:center;
        cursor: pointer;
        padding: 5px;   
}
 .footer{
   margin-top: 400px;
   border-radius: 0 0 10px 10px;
   text-align: center;
   font-family: 'raleway', sans-serif;
   
}

/* the Second search box*/
body {
   font-family: Arial;
  }
* {
   box-sizing: border-box;
  }

form.example input[type=text] {
    padding: 12px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 45%;
    background: #f1f1f1;
    border: 1px solid #B95FF6;
    margin-left: 400px;
     
  }

form.example button {
    float: left;
    width: 5%;
    padding: 21px;
    background: #B95FF6;
    color: white;
    font-size: 17px;
    border: 1px solid #B95FF6;
    border-left: none;
    cursor: pointer;

  }
form.example button:hover {
    background: #B95FF6;
  }
form.example::left {
    content: "";
    clear: both;
    display: table ;
   
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
<body>
<div id="main" class="main" >
<h8 class="logo"><a href="http://www.sano.rw">sano</a> </h8>

<form class="example" action="/action_page.php?">
<input type="text" placeholder="Search..." name="search">
<button type="submit"><i class="fa fa-search"></i></button>
</form>

<!-- Search button -->
<!--<div class="wrapper">-->
<!--<input type="search" class="search-input" name="q" value="" x-webkit-speech id="sbi" /><!-- eliminate whitespace -->
        <!--<button id="sbtn" class="search-button" type="submit"><span id="sspan"></span><span class="acchide">Search</span></button>-->
               <!-- <input type="hidden" name="ie" value="UTF-8" />-->
               <!-- <input type="hidden" name="sa" value="Search" />-->
                <!--<input type="hidden" name="channel" value="fe">-->
               <!-- <input type="hidden" name="client" value="browser">-->
               <!-- <input title="search" type="hidden" name="hl" value="en" />-->
<!-- End Search btn -->

<div class="logout"><a href="log-logout.php"  style="font-size:18px">Logout ?</a></div>
</div><!-- End of class wrapper-->
<script type="text/javascript">
//<![CDATA[
/*(function focus_search() {
    function search_select(e) {
        if(e.value.length > 0) {
            e.select();
        }
        e.select();
    }

    sbi = document.getElementById('sbi');
    sbi.focus();
    search_select(sbi);
})();*/
//]]>
</script>
</br></br>
<a href= "log-profile.php"><h2 class="title">My Profile Account</h2></a>
<h3 class="hello"><?php echo $login_username;?>Welcome: <?php echo $login_us;?>!</h3>
<!--<h3 class="hello"><?php echo $login_name;?>Your email is: <?php echo $login_user;?></h3> --><!-- Show email-->
<!--<h6 class="hello"><?php echo $login_name1;?>Your name is :<?php echo $login_name;?></h6> -->
         
         <div class="navbar">
         <a href="#"><img src="sewabo.jpg" alt="Se-wabo"></a> <!-- Uncle frm father-->
         <a href="#"><img src="nyirarume.jpg" alt="Nyirarume"></a> <!-- Uncle frm mother-->
         <a href="#"><img src="nyirasenge.jpg" alt="Nyirasenge"></a> <!-- Aunt frm father-->
         <a href="#"><img src="nyina_wabo.jpg" alt="Nyina-wabo"></a> <!-- Aunt frm mother-->
         <a href="#"><img src="bavandimwe.jpg" alt="Bavandimwe"></a> 
         <a href="#"><img src="bishywa.jpg" alt="Bishywa"></a> 
         <a href="#"><img src="ababyara.jpg" alt="Ababyara"></a> 
         <a href="#"><img src="abisengeneza.jpg" alt="Abisengeneza"></a> 
         <a href="#"><img src="baramu.jpg" alt="Baramu"></a> 
         <a href="#"><img src="basanzire.jpg" alt="Basanzire"></a>
         <div class="dropdown">
         <button class="dropbtn">Ibisekuru
         <i class="fa fa-caret-down"><i>
         </button>
         <div class="dropdown-content">
         <a href="ibisekuru.html">Sogokuru ubyara papa</a>
         <a href="#">Sogokuruza ubyara papa</a>
         <a href="#">Sogokuru ubyara mama</a>
         </div>
         </div>
         </div>
   


<br><br>


<footer class="footer">
<p class="copy"> Copyright &copy; Develop</p>
<p class="auth"> Mozal </p>
</footer>
</div><!--End of div main-->
</body>
</html
