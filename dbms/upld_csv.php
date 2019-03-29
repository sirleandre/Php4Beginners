<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR...nsitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Upload Record By CSV</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<section id="page">
<p><form id="form1" action="" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file" size="30" />
<br/>
<input type="Submit" value="Upload" name="submitBtn">
</form>
</p>
</section>
</body>
</html>

<?php
if (isset($_POST['submitBtn'])) { //read csv file

$cnx = mysql_connect("localhost","root","") or die("Error!");
mysql_select_db("record2",$cnx);

$num = 0;
if (trim($_FILES["file"]["name"]) == "") {
print "Please select file to upload.<br>";
} else { //read file
$fp = fopen($_FILES["file"]["tmp_name"], 'r') or die("can't open file");
$strTmp = "";
while ($csv_line = fgetcsv($fp, 1024)) {
print '<tr>';
for ($i = 0, $j = count($csv_line); $i < $j; $i++) {
$strTmp .= "'".$csv_line[$i]."',";
}
$strTmp = substr($strTmp,0,strlen($strTmp)-1); //remove last character (,)
$sql1 = "insert into players(firstname,lastname) values({$strTmp})"; //******/
$result1 = mysql_query($sql1) or die("error! {$sql1}");

$num++;
$strTmp = "";
}

fclose($fp) or die("can't close file");
print "\n{$num} records created...";
}
}
?>
