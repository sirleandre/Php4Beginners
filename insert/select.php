<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','root','mozal','college');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

//chained PHP functions
$product_name = $mysqli->query("SELECT student_name FROM students WHERE sid = 15")->fetch_object()->student_name;
print $product_name; //output value

$mysqli->close();
?>
