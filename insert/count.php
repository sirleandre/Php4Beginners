<?php/* 
//values to be inserted in database table and display record No

$mysqli = mysqli_connect('localhost', 'root', 'mozal','college');
$student_name = '"'.$mysqli->real_escape_string.'"';
$student_email = '"'.$mysqli->real_escape_string.'"';
$student_city = '"'.$mysqli->real_escape_string.'"';

//MySqli Insert Query default when you reflesh a browser record deplicate in database
$insert_row = $mysqli->query("INSERT INTO students (student_name, student_email, student_city) VALUES($student_name, $student_email, $student_city)");
if($insert_row){
    print 'Success! ID of last inserted record is : ' .$mysqli->insert_id .'<br/>';
}else{
    die('Error : ('. $mysqli->errno .') '. $mysqli->error);
}
*/
?>
