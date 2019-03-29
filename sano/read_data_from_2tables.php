
<?php 
//Irakora neza ariko irahuza gusa ID zisa number from table to another
      $dbhost = 'localhost';
      $dbuser = 'root'; 
      $dbpass = 'mozal';
      $dbname = 'college';
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
     
      if(! $conn ) {
        die('Could not connect:' .mysqli_error());
      }
      echo '</br>';//'Connected successfully'
      $sql = 'SELECT a.uid, a.username, a.password, b.email FROM users a, tchild b WHERE a.uid = b.child_id';

      if($result = mysqli_query($conn, $sql)) {//mysqli_query # mysqli_multi_query biratandukanye: 
         if(mysqli_num_rows($result) > 0) {
           echo "<table>";
           echo "<tr>";
           echo "<th>UID</th>"; 
           echo "<th>Username</th>";
           echo "<th>Password</th>";
           echo "<th>Email</th>";
           echo "<tr>";

           while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['uid'] . "</td>"; 
                echo "<td>"  . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "</tr>";
              }
            echo "</table>";
            mysqli_free_result($result);
          } else {

               echo "No records matching your query were found."; 
               }
          } else {

               echo "ERROR: Could not able to execute $sql." .mysqli_error($conn); 
            }
            mysqli_close($conn); echo "</br>"; 

/*

      $dbhost = 'localhost';
      $dbuser = 'root'; 
      $dbpass = 'mozal';
      $dbname = 'college';
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, true);
 if(!$link || !@mysqli_select_db($dbname, $link)) {
   echo("Cant connect to server");
      exit;
 }

$username = 'morgan';
$password = 'mo12';
$email  =  'morgan.captain@sano.uk';

$sql = "INSERT INTO users (username, password) VALUES ($username, $password)";
$result = mysqli_query( $sql, $conn);

//
$user_id = mysqli_query ( $conn);
mysqli_free_result ( $result);

//

$sql = "INSERT INTO tchild (email) VALUES ('$email')";
$result = mysqli_query( $sql, $conn);
mysqli_free_result ( $result);
*/

?>

<?php
/*
//Harimo agakosa gatoya
      $dbhost = 'localhost';
      $dbuser = 'root'; 
      $dbpass = 'mozal';
      $dbname = 'college';
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

   mysqli_autocommit($conn, false);
  $flag = true;
$Name = $Last = $Date = $Gender = $nationality = $addnationality = $email = $phone = $resident = $father = $fatherlast = $mother = $motherlast = "";

   $Name = $_POST['name'];
   $Last = $_POST['lastname'];
   $Date  = date("Y-m-d");
   $Gender = $_POST['sex'];
   $nationality = $_POST['nationality'];
   $addnationality = $_POST['addnationality'];
   $email = $_POST['email'];
   $phone = $_int['phone'];
   $resident = $_POST['resident'];
   $father = $_POST['father'];
   $fatherlast = $_POST['fatherlast'];
   $mother = $_POST['mother'];
   $motherlast = $_POST['motherlast'];

//
//
   

 $sql= "INSERT INTO users (username, password, email, time) VALUES('$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[time]')";

$sql2 = "INSERT INTO tchild (name, lastname, birthdate, sex, nationality, addnationality, email, phone, resident, father, fatherlast, mother, motherlast) VALUES ('$Name','$Last','$Date','$Gender','$nationality','$addnationality','$email','$phone','$resident','$father','$fatherlast','$mother','$motherlast')";

$result= mysqli_query($conn, $sql);

  if (!$result) {
    $flag = false;
    echo "Error details:" . mysqli_error($conn) . ". ";
  }

 $result = mysqli_query($conn, $sql2);

 if(!$result) {
    $flag = false;
    echo "Error details: " . mysqli_error($conn) . ". ";

  }

  if($flag) {
   mysqli_commit($conn);
   echo "All queries were executed successfully";
  
  }else {
     mysqli_rollback($conn);
     echo "All queries were rolled back";
 }
*/
?>




























