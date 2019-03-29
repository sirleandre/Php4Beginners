<?php
  // $conn = new PDO( $dsn, $username, $password );
   
$dsn = "mysql:dbname=college";
$username = "root";
$password = "mozal";

try {
   $conn = new PDO( $dsn, $username, $password );
   $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch ( PDOException $e) {
  echo "Connection failed:" . $e->getMessage();
}

//$conn = new PDO( $dsn, $username, $password);
//$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


?>
