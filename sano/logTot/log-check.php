<?php
include('log-connection.php');
session_start();
$user_check=$_SESSION['email'];
//$user2_check=$_SESSION['email'];

$sql = mysqli_query($db, "SELECT email,name FROM tchild WHERE email='$user_check' ");
//$sql = mysqli_query($db, "SELECT phone,name FROM tchild WHERE child_id='$user2_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$login_user=$row['email']; //select email from table
$login_us=$row['name'];//select username from table
//$login_name=$row['name']; yerekana imyirondoro igendeye kuri email winjije ufungura account

if(!isset($user_check))
{
header("Location: log-ind.php");
}
?>
