<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with password) */
$link = mysqli_connect("localhost", "root", "mozal", "college");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['studen_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['student_email']);
$city = mysqli_real_escape_string($link, $_REQUEST['student_city']);
 
// attempt insert query execution
$sql = "INSERT INTO students (student_name, student_email, student_city) VALUES ('$name', '$email', '$city')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
