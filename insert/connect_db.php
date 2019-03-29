<?php
$servername = "localhost";
$username = "root";
$password = "mozal";
$dbname = "testdb";
// Create connection by mysqli object oriented
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


