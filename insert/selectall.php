<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','root','mozal','college');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

//MySqli Select Query
$results = $mysqli->query("SELECT sid, student_name, student_email, student_city, reg_date FROM students");
echo "All records stored in our Database ";
print '<table border="1">';
while($row = $results->fetch_object()) {     

    print '<tr>';
    //print '<td>'.$row->sid.'</td>';
    print '<td>'.$row->student_name.'</td>';
    print '<td>'.$row->student_email.'</td>';
    print '<td>'.$row->student_city.'</td>';
    print '<td>'.$row->reg_date.'</td>';
    print '</tr>';
}  

print '</table>';

// close connection
$mysqli->close();
?>
