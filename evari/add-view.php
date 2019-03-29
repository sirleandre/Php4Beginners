<?php 
$db = new mysqli('localhost', 'root', 'mozal', 'college');// change the database connections
?>
<?php
if(isset($_POST['ADD'])!="")
 {   
    $title=$_POST['student_name'];
    $description=$_POST['student_email'];
    $insert=$db->query("INSERT INTO `students`(student_name,student_email) values('$title','$description')"); 
    if($insert)
    {
        echo "<script> alert('search the title now') </script>";
    }
    else
    { 
         echo "<script> alert('unable insert to your details') </script>";  
    } 
 }
?>

<html>
<head>
<title>mostlikers</title>
<link rel="stylesheet" href="st.css" />
</head>
<body>
<div class="mostlikers-top">
<a href="http://karthickinfotech.blogspot.in/">
<img  name="mostlikers" style="border:none;" src="demo.png" title="mostlikers"
  alt="mostlikers" /></a>
</div>
<div class="login">
<div class="addnew">
<form name="add" method="post">
<h2>Add New Record</h2>
<p><label>Title</label><br />
<input type="text" size="40" name="title" title="title" /></p>
<p><label>Descriptions</label><br />
<textarea name="desc" rows="5" cols="30"></textarea></p>
<input type="submit" name="ADD" class="submit" value="ADD" title="ADD" />
</form>
</div></div>
</div> <div class="mostlikers-bottom">

</body></html>
