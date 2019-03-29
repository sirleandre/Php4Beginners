<?php
require_once( "log-connection.php" );
//require_once("insert.php");
//$q = mysqli_query($db,"SELECT * FROM users LEFT JOIN tchild ON tchild.child_id=users.uid WHERE tchild.child_id='$userid'");
//GUHUZA TABLES ebyiri SELECT * FROM users LEFT JOIN tchild ON tchild.child_id=users.uid WHERE tchild.child_id=uid;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns=”http://www.w3.org/1999/xhtml” xml:lang=”en” lang=”en”>
<head>
<title>
..: Create account Form :..
</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<?php
if ( isset( $_POST["step"] ) and $_POST["step"] >= 1 and $_POST["step"]
<= 3 ) {
call_user_func( "processStep" . (int)$_POST["step"] );
} else {
displayStep1();
}
function setValue( $fieldName ) {
if ( isset( $_POST[$fieldName] ) ) {
echo $_POST[$fieldName];
}
}
function setChecked( $fieldName, $fieldValue ) {
if ( isset( $_POST[$fieldName] ) and $_POST[$fieldName] == $fieldValue ) {
echo ' checked="checked"';
}
}
function setSelected( $fieldName, $fieldValue ) {
if ( isset( $_POST[$fieldName] ) and $_POST[$fieldName] == $fieldValue ) {
echo ' selected="selected"';
}
}
function processStep1() {
displayStep2();
}
function processStep2() {
if ( isset( $_POST["submitButton"] ) and $_POST["submitButton"] ==
"< Back" ) {
displayStep1();
} else {
displayStep3();
}
}
function processStep3() {
if ( isset( $_POST["submitButton"] ) and $_POST["submitButton"] == "< Back") {
displayThanks();
} else {
displayStep2();
} 
}

function displayStep1() {
?>
<h1>Personal Sign up: Step 1</h1>
<form action="create_account.php" method="post">
<div id="data" style="width: 30em;">
<input type="hidden" name="step" value="1" />

<input type="hidden" name="nationality" value="<?php setValue ( "nationality" ) ?>"/>
<input type="hidden" name="addnationality" value="<?php setValue ( "addnationality" ) ?>"/>
<input type="hidden" name="email" value="<?php setValue ( "email" ) ?>"/>
<input type="hidden" name="phone"  value="<?php setValue ( "phone" ) ?>"/>
<input type="hidden" name="resident" value="<?php setValue ( "resident" ) ?>"/>
<input type="hidden" name="father"  value="<?php setValue ( "father" ) ?>"/>
<input type="hidden" name="fatherlast" value="<?php setValue ( "fatherlast" ) ?>"/>
<input type="hidden" name="mother" value="<?php setValue ( "mother" ) ?>"/>
<input type="hidden" name="motherlast" value="<?php setValue ( "motherlast" ) ?>"/>

<label for="name">Name:</label>
<input type="text" name="name" id="name" value="<?php setValue( "name" ) ?>" /><br>
<label for="lastName">Last name:</label>
<input type="text" name="lastname" id="lastName" value="<?php setValue ( "lastname" ) ?>" /><br>
<label>Birth date:</label>
<input type="date" name="birthdate" id="birthDate" value="<?php setValue ( "birthdate" ) ?>" require="true"/><button type="image">photo</button><br>
<label>Your gender:</label>
<label for="genderFemale">Female</label>
<input type="radio" name="sex" id="genderFemale" value=
"F"<?php setChecked( "sex", "F" )?> />
<label for="genderMale">Male</label>
<input type="radio" name="sex" id="genderMale" value=
"M"<?php setChecked ( "sex", "M" )?> />
<div style="clear: both;">
<input type="submit" name="submitButton" id="nextButton" value=
"Next &gt;" />
</div>
</div>
</form>
<?php
}
function displayStep2() {
?>
<h1>Address Sign up: Step 2</h1>
<form action="create_account.php" method="post">
<div id="data" style="width: 30em;">
<input type="hidden" name="step" value="2" />

<input type="hidden" name="name" value="<?php setValue 
( "name" ) ?>" />
<input type="hidden" name="lastname" value="<?php setValue 
( "lastname" ) ?>" />
<input type="hidden" name="birthdate" value="<?php setValue 
( "birthdate" ) ?>" require="true"/>
<input type="hidden" name="sex" value="F"<?php setChecked ( "sex", "F" )?> />
<input type="hidden" name="sex" value="M"<?php setChecked ( "sex", "M" )?> />



<label for="nationality">Nationality:</label>
<input type="text" name="nationality" id="nationality" value="<?php setValue( "nationality" ) ?>" /><br>
<label for="addnationality">Other Nationality:</label>
<input type="text" name="addnationality" id="addnationality" value="<?php setValue( "addnationality" ) ?>" /><br>
<label for="email">Email:</label>
<input type="email" name="email" id="email" value="<?php setValue( "email" ) ?>" /><br>
<label for="nationality">Telephone:</label>
<input type="text" name="phone" id="phone" minlength="10" value="<?php setValue( "phone" ) ?>" /><br>
<label for="nationality">Residence:</label>
<input type="text" name="resident" id="resident" value="<?php setValue( "resident" ) ?>" />
<div style="clear: both;">
<input type="submit" name="submitButton" id="nextButton" value=
"Next &gt;" />
<input type="submit" name="submitButton" id="backButton"
value="&lt; Back" style="margin-right: 20px;" />
</div>
</div>
</form>
<?php
}
function displayStep3() {
?>
<h1>Your Family Sign up: Step 3</h1>
<form action="create_account.php" method="post">
<div id="data" style="width: 30em;">
<input type="hidden" name="step" value="3" />

<input type="hidden" name="name" value="<?php setValue 
( "name" ) ?>" />
<input type="hidden" name="lastname" value="<?php setValue 
( "lastname" ) ?>" />
<input type="hidden" name="birthdate" value="<?php setValue 
( "birthdate" ) ?>" require="true"/>
<input type="hidden" name="sex" value=
"F"<?php setChecked ( "sex", "F" )?> />
<input type="hidden" name="sex" value=
"M"<?php setChecked ( "sex", "M" )?> />
<input type="hidden" name="nationality" value="<?php setValue 
( "nationality" ) ?>"/>
<input type="hidden" name="addnationality" value="<?php setValue 
( "addnationality" ) ?>"/>
<input type="hidden" name="email" value="<?php setValue 
( "email" ) ?>"/>
<input type="hidden" name="phone"  value="<?php setValue 
( "phone" ) ?>"/>
<input type="hidden" name="resident" value="<?php setValue 
( "resident" ) ?>"/>
<!--Bi -->
<label for="father">Father Name:</label>
<input type="text" name="father"  id="father" value="<?php setValue 
( "father" ) ?>"/><br>
<label for="fatherLast">Father Last Name:</label>
<input type="text" name="fatherlast" id="fatherLast" value="<?php setValue 
( "fatherlast" ) ?>"/><br>
<label for="mother">Mother Name:</label>
<input type="text" name="mother" id="mother" value="<?php setValue 
( "mother" ) ?>"/><br>
<label for="motherLast">Mother Last Name:</label>
<input type="text" name="motherlast" id= "motherLast" value="<?php setValue 
( "motherlast" ) ?>"/>
<div style="clear: both;">
<input type="submit" name="submitButton" id="nextButton" value=
"back" />
<input type="submit" name="submitButton" id="backButton"
value="&lt; Back" style="margin-right: 20px;" />
</div>
</div>
</form>
<?php
}
function displayThanks() {
?>
<h1>Thank You</h1>
<p>Thank you, your application has been received.</p>
<p>Check a link in your email.</p>
<?php
}
?>


</body>
</html>
