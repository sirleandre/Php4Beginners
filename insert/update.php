 <?php
$servername = "localhost";
$username = "root";
$password = "mozal";
$dbname = "college";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE students SET student_name='Matabaro',student_email='matabarouber@stuxnet.org',student_city='Ruhengeri' WHERE sid=11";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 
