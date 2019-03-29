<?php
include('log-connection.php');
session_start();
$user_check=$_SESSION['email'];

//$sql = mysqli_query($db, "SELECT email FROM muser WHERE email='$user_check' ");

$sql = mysqli_query($db, "SELECT email,password FROM muser,luser WHERE email='muser.uid=luser.uid' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$login_user=$row['email'];

if(!isset($user_check))
{
header("Location: log-ind.php");
}
?>
