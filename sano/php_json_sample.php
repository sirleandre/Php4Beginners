<?php
     class Emp {
          
          public $name = "";
          public $hobbies = "";
          public $birthdate = "";
     }

     $e = new Emp();
     $e->name = "Sachin";
     $e->hobbies = "sports";
     $e->birthdate = date('m/d/Y h:i:s a',"8/5/1988 12:20:03 p");
     $e->birthdate = date('m/d/Y h:i:s a',strtotime("8/5/1988 12:20:03"));

     echo json_encode($e);
?>
