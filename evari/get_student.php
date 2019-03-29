<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
      <title>Student's information</title>
      <link rel="stylesheet" type="text/css" href=common.css />
   </head>
   <body>

      <h1>Students</h1>
      

<?php 
//Irakora neza
$dsn = "mysql:dbname=college";
$username = "root";
$password = "mozal";

try {
   $conn = new PDO( $dsn, $username, $password );
   $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch ( PDOException $e) {
  echo "Connection failed:" . $e->getMessage();
}

 $sql = "SELECT * FROM students";
 
 echo "<ul>";

 try {
   $rows = $conn->query( $sql );
   foreach ( $rows as $row) {
     echo "<li> " . $row["student_name"] . " " . $row["student_email"] . " " . $row["student_city"] . "</li>";
     }
 } catch ( PDOException $e ) {
   echo "Query failed: " . $e->getMessage();
 }

   echo "</ul>";
   $conn = null;
//SELECT DISTINCT students.student_name, players.lastname FROM students, players WHERE students.sid = players.id;
//SELECT * FROM students WHERE reg_date > '2018-01-04' AND reg_date < '2018-04-07';
?>

  </body>
</html>

