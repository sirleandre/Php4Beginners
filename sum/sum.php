<?php
$con=mysqli_connect('127.0.0.1','root','mozal');
 if (!$con)
   {
     echo 'Not connected To Server';
   }

 if (!mysqli_select_db($con,'calc'))
   {
     echo 'Database not selected';
   }

   $number1 = $_POST['num1'];
   $number2 = $_POST['num2'];
   $number3 = $_POST['num3'];
   $sum = $number1 + $number2 + $number3;

   $sql = "INSERT INTO sum (number1,number2,number3,sum) VALUES ('$number1','$number2','$number3','$sum')";

  if (!mysqli_query($con,$sql)) 
    {
      echo 'Not Inserted';
    }
  else
    {
      echo 'Inserted:',$sum;
    }
  header("refresh:2; url=sum_form.html");
?>
