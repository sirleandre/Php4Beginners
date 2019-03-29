<?php
session_start();
unset($_SESSION['uid']);
if(session_destroy())
{
header("Location: log-ind.php");
}
?>
