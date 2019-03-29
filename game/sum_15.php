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
 
   $number1 = $_POST['a'];
   $number2 = $_POST['b'];
   $number3 = $_POST['c'];
   $sum = $number1 + $number2+$number3;/*Sum of Row1*/
$number4 = $_POST['d'];
   $number5 = $_POST['e'];
   $number6 = $_POST['f'];
   $sum_row2 = $number4 + $number5+$number6;/*Sum of Row2*/
$number7 = $_POST['g'];
   $number8 = $_POST['h'];
   $number9 = $_POST['i'];
   $sum_row3 = $number7 + $number8+$number9;/*Sum of Row3*/
$number1 = $_POST['a'];
   $number4 = $_POST['d'];
   $number7 = $_POST['g'];
   $sum_column1 = $number1 + $number4+$number7;/*Sum of Column1*/
$number2 = $_POST['b'];
   $number5 = $_POST['e'];
   $number8 = $_POST['h'];
   $sum_column2 = $number2 + $number5+$number8;/*Sum of Column2*/
$number3 = $_POST['c'];
   $number6 = $_POST['f'];
   $number9 = $_POST['i'];
   $sum_column3 = $number3 + $number6+$number9;/*Sum of Column3*/
$number7 = $_POST['g'];
   $number5 = $_POST['e'];
   $number3 = $_POST['c'];
   $sum_left = $number7 + $number5+$number3;/*Sum of Diagonal Bottom left to top*/
$number9 = $_POST['i'];
   $number5 = $_POST['e'];
   $number1 = $_POST['a'];
   $sum_right = $number9 + $number5+$number1;/*Sum of Diagonal Bottom right to top*/

   $sql1 = "INSERT INTO sum (number1,number2,number3,sum) VALUES ('$number1','$number2','$number3','$sum')";
   //$sql2 = "INSERT INTO sum_row2 (number4,number5,number6,sum_row2) VALUES ('$number4','$number5','$number6','$sum_row2')";
   //$sql3 = "INSERT INTO sum_row3 (number7,number8,number96,sum_row3) VALUES ('$number7','$number8','$number9','$sum_row3')";
   //$sql4 = "INSERT INTO sum_column1 (number1,number4,number7,sum_column1) VALUES ('$number1','$number4','$number7','$sum_column1')";
   //$sql5 = "INSERT INTO sum_column2 (number2,number5,number8,sum_column2) VALUES ('$number2','$number5','$number8','$sum_column2')";
   //$sql6 = "INSERT INTO sum_column3 (number3,number6,number9,sum_column3) VALUES ('$number3','$number6','$number9','$sum_column3')";
   //$sql7 = "INSERT INTO sum_left (number7,number5,number3,sum_left) VALUES ('$number7','$number5','$number3','$sum_left')";
   //$sql8 = "INSERT INTO sum_right (number9,number5,number1,sum_right) VALUES ('$number9','$number5','$number1','$sum_right')";

  if (!mysqli_query($con,$sql1))//&&($con,$sql2)&&($con,$sql3)&&($con,$sql4)&&($con,$sql5)&&($con,$sql6)&&($con,$sql7)&&($con,$sql8)) 
    {
      echo 'Not Inserted';
    }
  else
    {
      echo 'Inserted:',$sum;//$sum_row2,$sum_row3;
      //echo 'Inserted:',$sum_column1,$sum_column2,$sum_column3;
      //echo 'Inserted:',$sum_left,$sum_right;
    }
  header("refresh:2; url=sum_15.html");
?>
