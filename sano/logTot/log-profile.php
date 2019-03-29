<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
      <title>Profile's information</title>
      <link rel="stylesheet" type="text/css" href=common.css />

           <style>

@import url(https://fonts.googleapis.com/css?family=Raleway);


section{
width:1200px;
position: relative;left: 530px;
  }

article{
width:1260px;
background-color:#9B59B6;
border-radius: 10px;
font-family: 'Raleway', sans-serif;
border: 2px solid #ccc;
padding: 10px 40px 45px;
margin-top: 1px;
  }

h1{
background-color:  #9B59B6;
color: white;
text-align:center;
border-radius: 10px 10px 0 0;
margin: ;
padding: 15px;
  }
strong {
  color:white;
 }
</style>
   </head>
   <body>

      <center><h1>Family Information</h1></center>
     

<?php
include('log-connection.php');
session_start();
$user_check=$_SESSION['email'];
//$user2_check=$_SESSION['email'];

$sql = mysqli_query($db, "SELECT name,lastname,birthdate,sex,nationality, addnationality,email,phone,resident,father,fatherlast,mother,motherlast FROM tchild WHERE email='$user_check' ");
  

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$login_us=$row['name'];
$login_last=$row['lastname'];
$login_bd=$row['birthdate'];
//$login_sx=$row['sex'];
$login_nlt=$row['nationality'];
$login_addn=$row['addnationality'];
//$login_user=$row['email'];
//$login_phone=$row['phone'];
$login_res=$row['resident'];
$login_fth=$row['father'];
$login_fthl=$row['fatherlast'];
$login_mth=$row['mother'];
$login_mthl=$row['motherlast'];

     $rs = mysqli_query($db,$sql); //rs variable holds mysql function which takes 2 arguments for connection and sql statement
     $getRow = mysqli_fetch_row($rs);  //getRow variable hold function and passed rs variable into it
                                       // and store fetch record array    into getRow varibale
     echo"<article>";
     echo"<section>";
     echo "<label><strong>First Name: </strong></label>"; echo$login_us;
     echo "<br>";
     echo "<label><strong>Last name: </strong></label>"; echo$login_last;
     //echo "<label><strong>Birth date: </strong></label>";echo$login_bd;
     //echo "<label><strong>Your gender: </strong></label>";echo$login_sx;
     echo "<br>";
     echo "<label><strong>Nationality: </strong></label>";echo$login_nlt;
     echo "<br>";
     echo "<label><strong>Other Nationality: </strong></label>";echo$login_addn;
     //echo "<label><strong>Email: </strong></label>";echo $login_user;
     //echo "<label><strong>Telephone: </strong></label>"; echo$login_phone;
     echo "<br>";
     echo "<label><strong>Residence: </strong></label>";echo$login_res;
     echo "<br>";
     echo "<label><strong>Father Name: </strong></label>";echo$login_fth;
     echo "<br>";
     echo "<label><strong>Father Last Name: </strong></label>";echo$login_fthl;
     echo "<br>";
     echo "<label><strong>Mother Name: </strong></label>";echo$login_mth;
     echo "<br>";
     echo "<label><strong>Mother Last Name: </strong></label>";echo$login_mthl;
     echo "<br>";
     
     echo "</section>";
     echo"</article>";
     
   
 /*    $rs = mysqli_query($conn,$query); 
     $getRowAssoc = mysqli_fetch_assoc($rs); 

     echo "<label>First Name: </label>" .$getRowAssoc['name'];
     echo "<br>";
     echo "<label>Last name: </label>" .$getRowAssoc['lastname'];
     echo "<br>";
     echo "<label>Birth date: </label>" .$getRowAssoc['birthdate'];
     echo "<br>";
     echo "<label>Your gender: </label>" .$getRowAssoc['sex'];
     echo "<br>";
     echo "<label>Nationality: </label>" .$getRowAssoc['nationality'];
     echo "<br>";
     echo "<label>Other Nationality: </label>" .$getRowAssoc['aaddnationality'];
     echo "<br>";
     echo "<label>Email: </label>" .$getRowAssoc['email'];
     echo "<br>";
     echo "<label>Telephone: </label>" .$getRowAssoc['phone'];
     echo "<br>";
     echo "<label>Residence: </label>" .$getRowAssoc['resident'];
     echo "<br>";
     echo "<label>Father Name: </label>" .$getRowAssoc['father'];
     echo "<br>";
     echo "<label>Father Last Name: </label>" .$getRowAssoc['fatherlast'];
     echo "<br>";
     echo "<label>Mother Name: </label>" .$getRowAssoc['mother'];
     echo "<br>";
     echo "<label>Mother Last Name: </label>" .$getRowAssoc['motherlast'];
     echo "<br>";
*/

  /*    if ($result = $conn->query($query)) {
            
               //fetch object array
          while ($row = $result->fetch_row()) { 
                  printf("%s \n%s\n %s \n%s\n %s \n%s\n %s \n%s\n", $row[1], $row[2], $row[3], $row[4],$row[5], $row[6],$row[7], $row[8]);
                }
                //free result set
              $result->close;
           
       }
      //close connection
      $mysqli->close();
  */
?>

  </body>
</html>

