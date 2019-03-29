<?php 

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'mozal';
$mysql_db = 'college';

mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db) or die('Could not connect.');

mysqli_select_db($mysql_db);
echo 'Connected!';

?>
