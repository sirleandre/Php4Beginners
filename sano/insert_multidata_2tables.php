<?php
//Ntikora ariko 
      $dbhost = 'localhost';
      $dbuser = 'root'; 
      $dbpass = 'mozal';
      $dbname = 'college';
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

      mysqli_autocommit($conn, false);
      $flag = true;

      $sql="INSERT INTO users (username, password, email) VALUES ('$_POST[username]', '$_POST[password]', '$_POST[email]' )";
      $sql2="INSERT INTO tchild (name, lastname, birthdate, sex, nationality, addnationality, email, phone, resident, father, fatherlast, mother, motherlast) VALUES ('$_POST[name]', '$_POST[lastname]', '$_POST[birthdate]' ,'$_POST[sex]', '$_POST[nationality]', '$_POST[addnationality]' ,'$_POST[email]', '$_POST[phone]', '$_POST[resident]' ,'$_POST[father]', '$_POST[fatherlast]', '$_POST[mother]' , '$_POST[motherlast]' )";

      $result = mysqli_query($conn, $sql);

   if(!$result) {
     $flag = false;
     echo "Error details: " . mysqli_error($conn) . " . ";
    }

 $result = mysqli_query($conn, $sql2);

    if(!$result) {
      $flag = false;
      echo "Error details: " . mysqli_error($conn) . " . ";
    }
 
    if($flag) {
      mysqli_commit($conn)
      echo "All queries were executed successfuly";
    } else {

          mysqli_rollback($conn);
          echo "All queries were rolled back";
        }
?>
