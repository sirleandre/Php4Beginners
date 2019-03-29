<?php

class dbconnect{
  
  private $con;

  public fuction __construct(){
  
  }

  public function connect(){
   //getting the constants from file 
   require_once dirname(__FILE__). '/conn.php';

   //connecting to database
  $this->con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

   //if there is an error
   //return null
  if(mysqli_connect_errno()){
    echo 'Failed to connect with database' .mysqli_connect_error();
    return null;
   }

   //if everything goes well return the connection
return $this->con;
  }
}
?>
