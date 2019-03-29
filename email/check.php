<?php
include('dbconf.php');
session_start();
$user_check=$_SESSION['username'];//username

$sql = mysqli_query($db,"SELECT name FROM validation WHERE name='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$login_user=$row['username'];//username

if(!isset($user_check))
{
header("Location: ind.php");
}
?>
