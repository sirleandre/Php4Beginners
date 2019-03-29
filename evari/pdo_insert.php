<?php 
//Ntikora
$dsn = "mysql:dbname=college";
$username = "root";
$password = "mozal";

try {
   $conn = new PDO( $dsn, $username, $password );
   $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch ( PDOException $e) {
  echo "Connection failed:" . $e->getMessage();
}

 $sid = 88;
 $student_name = "MUKOMBOZI Willborld";
 $student_email = "mukombowill@sano.ug";
 $student_city = "KAMPALA";
 $reg_date = 2018-04-07 28:27:22;

 $sql = "INSERT INTO students VALUES ( :sid, :student_name, :student_email, :student_city, :reg_date)";
 

 try {
   $st = $conn->prepare( $sql);
   $st->bindValue( ":sid", $sid, PDO::PARAM_INT);
   $st->bindValue( ":student_name", $student_name, PDO::PARAM_STR);
   $st->bindValue( ":student_email", $student_email, PDO::PARAM_STR);
   $st->bindValue( ":student_city", $student_city, PDO::PARAM_STR);
   $st->bindValue( ":reg_date", $reg_date, PDO::PARAM_STR);
   $st->execute();
  } catch ( PDOException $e ) {
    echo "Query failed:" .$e->getMessage();
 } 

   
?>
