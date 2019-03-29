<?php
     require_once 'db_connect.php';
     $activation_key = $_GET['key'];
     if(isset($activation_key) && !empty($activation_key)){
         $activation_key = $dbConnection->real_escape_string($activation_key);
         $checkActivationKey = "SELECT id,status FROM images WHERE activation_key= '".$activation_key."'";
         $resKey = $dbConnection->query($checkActivationKey);
         $rows_returned > 0){
         if($rows_returned > 0){
             $rowKey = $resKey->fetch_assoc();
                  if($rowKey['status'] == 'N'){
                     $sqlUpdateUser = $dbConnection->query("UPDATE images SET status = 'Y' WHERE id = '".$rowKey['id']. " ' ");
                       $msg= "Your account is activated";
                   }else {
                       $msg="Your account is already active.";
                       } 
           }else {

               $msg="Wrong activation code.";
              }
        }
        echo $msg;
        echo "Error details:" . mysqli_error($dbConnection) . ". ";
?>
