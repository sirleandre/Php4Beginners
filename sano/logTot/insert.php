<?php  
// Create connection by mysqli procedural
$con=mysqli_connect('127.0.0.1','root','mozal');
// Check connection to Server
 if (!$con)
   {
     echo 'Not connected To Server';
   }
//Connect to a database
 if (!mysqli_select_db($con,'college'))
   {
     echo 'Database not selected';
   }
      
$Name = $Last = $Date = $Gender = $nationality = $addnationality = $email = $phone = $resident = $father = $fatherlast = $mother = $motherlast = "";

   $Name = $_POST['name'];
   $Last = $_POST['lastname'];
   $Date  = $_POST['birthdate'];
   $Gender = $_POST['sex'];
   $nationality = $_POST['nationality'];
   $addnationality = $_POST['addnationality'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $resident = $_POST['resident'];
   $father = $_POST['father'];
   $fatherlast = $_POST['fatherlast'];
   $mother = $_POST['mother'];
   $motherlast = $_POST['motherlast'];

//
//
   
   $sql = "INSERT INTO tchild (name, lastname, birthdate, sex, nationality, addnationality, email, phone, resident, father, fatherlast, mother, motherlast) VALUES ('$Name','$Last','$Date','$Gender','$nationality','$addnationality','$email','$phone','$resident','$father','$fatherlast','$mother','$motherlast')";
  
//
 if (!mysqli_query($con,$sql)) // Variable $con must begin to insert a record
   {
     echo "Record has not been created.";
     
   } 

 else 
   {
     echo "<h8>Thank You</h8>, your application has been received.</br> Check a link in your email.";  
   }
//Reflesh automaticaly to avoid data duplicate
  header("refresh:5; url=log-ind.php");
echo " . mysqli_error($con) .  ";
?>
