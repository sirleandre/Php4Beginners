

<?php
//Create connection
$link = mysqli_connect("localhost", "root", "mozal", "college");

//Check connection
if ($link ==== false) {
  die("ERROR: Could not connect. " . mysqli_connect_error());
}


$name = mysqli_real_escape_string($link, $REQUEST['name']);
$lastname = mysqli_real_escape_string($link, $REQUEST['lastname']);
/*$birthdate = mysqli_real_escape_string($link, $REQUEST['birthdate']);
$sex = mysqli_real_escape_string($link, $REQUEST['sex']);
$nationality = mysqli_real_escape_string($link, $REQUEST['nationality']);
$addnationality = mysqli_real_escape_string($link, $REQUEST['addnationality']);
$email = mysqli_real_escape_string($link, $REQUEST['email']);
$phone = mysqli_real_escape_string($link, $REQUEST['phone']);
$resident = mysqli_real_escape_string($link, $REQUEST['resident']);
$father = mysqli_real_escape_string($link, $REQUEST['father']);
$fatherlast = mysqli_real_escape_string($link, $REQUEST['fatherlast']);
$mother = mysqli_real_escape_string($link, $REQUEST['mother']);
$motherlast = mysqli_real_escape_string($link, $REQUEST['motherlast']);  */

//, birthdate, sex,, nationality, addnationality, email, phone, resident, father, fatherlast, mother, motherlast 
$sql = "INSERT INTO tchild (name, lastname)
 VALUES ('$name', '$lastname')";
// ,'$birthdate', '$sex', '$nationality', '$addnationality', '$email', '$phone', '$resident', '$father', '$fatherlast', '$mother', '$motherlast'
if (mysqli_query($link, $sql)) {
echo "Submitted";
} else {
echo "ERROR: Could not able to execute $sql." .mysqli_error($link);
}

$conn->close($link);
}
?>

