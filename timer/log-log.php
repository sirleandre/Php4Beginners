<?php
session_start();
include('log-connection.php');//Establishing connection with our database

$error = "";//Variable for storing our errors.
      if(isset($_POST["submit"]))
      {
      if(empty($_POST["email"]) || empty($_POST["password"]))
      {
       $error = "Both fields are required.";
      }else
      {
  //Define $username and $password
$username=$_POST['email'];
$password=$_POST['password'];

//To protect from Mysql injection

$name = stripslashes($name);
$name = mysqli_real_escape_string($db, $name);;
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($db, $username);
$password = mysqli_real_escape_string($db, $password);
//$password = md5($password);

//Check username and password from database
$sql="SELECT uid FROM users WHERE email='$username' and password='$password' ";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//If username and password exist in our database the create a session.
//Otherwise echo error.

      if(mysqli_num_rows($result) == 1)
      {
      $_SESSION['email'] = $username; //Initializing Session                **This $login_user must be replaced by $username**
      header("Location: log-home.php"); //Redirect to other page
      }else
      {
      $error = "Incorrect email or password.";
      } 

      }
      }
?>
