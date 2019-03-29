<?php

// server info
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'mozal';
$db_name = 'college';

// connect to the database
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);


mysqli_report(MYSQLI_REPORT_ERROR);
// check conenction:
    //if (mysqli_connect_errno()) {
        //printf("Connect failed: %s\n", mysqli_connect_error());
   // }

    // encryption utf-8 via connection:
    //$mysqli->set_charset("utf-8");  
?>
