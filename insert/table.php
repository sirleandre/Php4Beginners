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
      $Name = $Email = $City = "";

   $Name = $_POST['stu_name'];
   $Email = $_POST['stu_email'];
   $City  = $_POST['stu_city'];
   $password = stripslashes ($_REQUEST['password']);
   //$password = mysqli_real_escape_string ($con,$password);
   //$trn_date = date("Y-m-d H:i:s");   

   //$ql = "INSERT INTO `students` (student_name, password, student_email, student_city, trn_date) 
    //VALUES ('$Name','$password', '$Email','$City','$trn_date')";

   $sql = "INSERT INTO students (student_name, student_email, student_city) VALUES ('$Name','$Email','$City')";
  
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
  header("refresh:2; url=form_table.html");
?>
