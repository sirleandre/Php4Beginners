<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>View Records</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<section id="page">
<h1>View Records</h1>

<p><b>View All</b> | <a href="view_paginated.php">View Paginated</a></p>

<?php
// connect to the database
include('connect.php');

// get the records from the database
if ($result = $mysqli->query("SELECT * FROM students ORDER BY sid"))
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
echo "<table border='1' cellpadding='5'>";

// set table headers
echo "<tr><th>Sid</th><th>Names</th><th>Email</th><th>Dist/City</th><th>Update</th><th>Erase</th></tr>";

while ($row = $result->fetch_object())
{
// set up a row for each record
echo "<tr>";
echo "<td>" . $row->sid . "</td>";//Database's table real field name
echo "<td>" . $row->student_name . "</td>";
echo "<td>" . $row->student_email . "</td>";
echo "<td>" . $row->student_city . "</td>";
echo "<td><a href='records.php?id=" . $row->sid . "'>Edit</a></td>";
echo "<td><a href='delete.php?id=" . $row->sid . "'>Delete</a></td>";
echo "</tr>";
}

echo "</table>";
}
// if there are no records in the database, display an alert message
else
{
echo "No results to display!";
}
}
// show an error if there is an issue with the database query
else
{
echo "Error: " . $mysqli->error;
}

// close database connection
$mysqli->close();

?>

<a href="records.php">Add New Record</a>

</section>
</body>
</html>
