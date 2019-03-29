<?php 
//Ntizikora neza
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
      
  $Name = $Last = ""; 
//$Last = $Date = $Gender = $nationality = $addnationality = $email = $phone = $resident = $father = 
//$fatherlast = $mother =$motherlast = "";

   $Name = $_POST['name'];
   $Last = $_POST['lastname'];
   //$Date  = date("Y-m-d");
   //$Gender = $_POST['sex'];
   //$nationality = $_POST['nationality'];
   //$addnationality = $_POST['addnationality'];
   //$email = $_POST['email'];
   //$phone = $_POST['phone'];
   //$resident = $_POST['resident'];
   //$father = $_POST['father'];
   //$fatherlast = $_POST['fatherlast'];
   //$mother = $_POST['mother'];
   //$motherlast = $_POST['motherlast'];

//, lastname, birthdate, sex, nationality, addnationality, email, phone, resident, father, fatherlast, mother, motherlast)
//,'$Last','$Date','$Gender','$nationality','$addnationality','$email','$phone','$resident','$father','$fatherlast','$mother',
//'$motherlast')";
   
   $sql = "INSERT INTO tsogokurup (name,lastname) VALUES ($Name',$Last)";
    


  //Addition code for test secondary
   $sql .= "INSERT INTO tchild (name, lastname, email)
VALUES (`Mary`, `Moe`, `mary@example.com`);";


if ($con->multi_query($sql) == TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();


// Source for the first script
/*if (!mysqli_query($con,$sql)) //$con to select data
   {
     echo "Record has not been created.";
    
   } 

 else 
   {
     echo "<h8>Thank You</h8>, your application has been received.</br> Check a link in your email.";  
   }
//Reflesh automaticaly to avoid data duplicate
  header("refresh:2; url=ibisekuru.html");
echo " . mysqli_error($con) .  ";
*/
//End Original source code
?> 


































