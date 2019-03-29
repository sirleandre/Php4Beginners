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
      $f_name = $l_name = $phone = $email = $b_date = $gender = $password = $c_password "";

   $f_name = $_POST['f_name'];
   $l_name = $_POST['l_name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $b_date = $_POST['b_date'];
   $gender = $_POST['gender'];
   $password = $_POST['password'];
   $c_password = $_POST['c_password'];

   $sql = "INSERT INTO students (f_name, l_name, phone, email, b_date, gender, password, c_password) VALUES ('$f_name','$l_name','$phone','$email','$b_date','$gender','$password','$c_password')";
  
//
 if (!mysqli_query($con,$sql)) // Variable $con must begin to insert a record
   {
     echo "Record does not created";
   } 

 else 
   {
     echo "New record created successfully";
   }
//Reflesh automaticaly to avoid data duplicate
  header("refresh:2; url=create_account.html");
?>
