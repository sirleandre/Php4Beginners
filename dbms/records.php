<?php
/*
Allows the user to both create new records and edit existing records
*/

// connect to the database
include("connect.php");

// creates the new/edit record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
function renderForm($first = '', $email ='', $city = '', $error = '', $id = '')
{ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>
<?php if ($id != '') { echo "Edit Record"; } else { echo "New Record"; } ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<h1><?php if ($id != '') { echo "Edit Record"; } else { echo "New Record"; } ?></h1>
<?php if ($error != '') {
echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error
. "</div>";
} ?>

<form action="" method="post">
<div>
<?php if ($id != '') { ?>
<input type="hidden" name="sid" value="<?php echo $id; ?>" />
<p>ID: <?php echo $id; ?></p>
<?php } ?>

<strong>Student Name: *</strong> <input type="text" name="student_name"
value="<?php echo $first; ?>"/><br/>
<strong>Student Email: *</strong> <input type="email" name="student_email"
value="<?php echo $email; ?>"/><br/>
<strong>Student City: *</strong> <input type="text" name="student_city"
value="<?php echo $city; ?>"/><br/>
<p>* required</p>
<input type="submit" name="submit" value="Submit" />
</div>
</form>
</body>
</html>

<?php }



/*

EDIT RECORD ntiyerekana izikosorwa**********************
*/

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id']))
{
// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit']))
{
// make sure the 'id' in the URL is valid
if (is_numeric($_POST['sid']))
{
// get variables from the URL/form
$id = $_POST['sid'];
$firstname = htmlentities($_POST['student_name'], ENT_QUOTES);
$studentemail = htmlentities($_POST['student_email'], ENT_QUOTES);
$studentcity = htmlentities($_POST['student_city'], ENT_QUOTES);

// check that names and email and city are both not empty
if ($firstname == '' || $studentemail == '' || $studentcity =='')
{
// if they are empty, show an error message and display the form
$error = 'ERROR: Please fill in all required fields!';
renderForm($firstname, $studentemail, $studentcity, $error, $id);
}
else
{
// if everything is fine, update the record in the database
if ($stmt = $mysqli->prepare("UPDATE students SET student_name = ?, student_email = ?, student_city = ?
WHERE sid=?"))
{
$stmt->bind_param("sssi", $firstname, $studentemail, $studentcity, $id);
$stmt->execute();
$stmt->close();
}
// show an error message if the query has an error
else
{
echo "ERROR: could not prepare SQL statement.";
}

// redirect the user once the form is updated
header("Location: view_paginatedless.php");
}
}
// if the 'id' variable is not valid, show an error message
else
{
echo "Error!";
}
}
// if the form hasn't been submitted yet, get the info from the database and show the form
else
{
// make sure the 'id' value is valid
if (is_numeric($_GET['id']) && $_GET['id'] > 0)
{
// get 'id' from URL
$id = $_GET['id'];//Gushyiramo db field name birabujijwe

// get the recod from the database
if($stmt = $mysqli->prepare("SELECT * FROM students WHERE sid=?"))
{
$stmt->bind_param("i", $id);
$stmt->execute();

$stmt->bind_result($id, $firstname, $studentemail, $studentcity);
$stmt->fetch();

// show the form
renderForm($firstname, $studentemail, $studentcity, NULL, $id);

$stmt->close();
}
// show an error if the query has an error
else
{
echo "Error: could not prepare SQL statement";
}
}
// if the 'id' value is not valid, redirect the user back to the view.php page
else
{
header("Location: view_paginatedless.php");
}
}
}



/*

NEW RECORD

*/
// if the 'id' variable is not set in the URL, we must be creating a new record
else
{
// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit']))
{
// get the form data
$firstname = htmlentities($_POST['student_name'], ENT_QUOTES);
$studentemail = htmlentities($_POST['student_email'], ENT_QUOTES);
$studentcity = htmlentities($_POST['student_city'], ENT_QUOTES);

// check that firstname and lastname are both not empty
if ($firstname == '' || $studentemail == '' || $studentcity == '')
{
// if they are empty, show an error message and display the form
$error = 'ERROR: Please fill in all required fields!';
renderForm($firstname, $studentemail, $studentcity, $error);
}
else
{
// insert the new record into the database
if ($stmt = $mysqli->prepare("INSERT students (student_name, student_email, student_city) VALUES (?, ?, ?)"))
{
$stmt->bind_param("sss", $firstname, $studentemail, $studentcity);
$stmt->execute();
$stmt->close();
}
// show an error if the query has an error
else
{
echo "ERROR: Could not prepare SQL statement.";
}

// redirec the user
header("Location: view_paginatedless.php");
}

}
// if the form hasn't been submitted yet, show the form
else
{
renderForm();
}
}

// close the mysqli connection
$mysqli->close();
?>

