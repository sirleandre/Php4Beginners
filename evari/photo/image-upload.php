<!DOCTYPE html>

<?php
//Iyi system ntirakora
//ifite file 5:conn.php, dbconnect.php, StoreImage.php, image.php, image-upload.php

require_once dirname(__FILE__) . '/StoreImage.php';
?>

<html>
<head>
<title>Upload Image PHP MySQL </title>
<link rel='stylesheet' href='style.css' />
</head>
 
<body>

<header>
<h1>Upload image</h1>
<h2>www.sano.rw</h2>
</header>

<?php
$uploaded = "";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $storeimage = new StoreImage;

   $desc = $_POST['desc'];
   $image = $_FILES['image']['tmp_name'];

   if(!($_FILES['image']['size'] > MAX_SIZE_ALLOWED)){
   $imagecontent = file_get_contents($image);
   if($storeimage->saveImage($desc, $imagecontent)) {
   $uploded = 'Image successfully uploded';
 } else {
     $uploaded = 'Some error please try again';
     }
  } else {
      $uploaded = 'File exceeds the maximum size limit';
      }
   }
?>

<content>
<div class='uploadpanel'>
<form method="POST" enctype="multipart/form-dat">
<div>
<input type='text' name='desc' placeholder="enter image description" required />
</div>
<div>
<input type='file' name='image' accept="image/*" required />
</div>
<div>
<button>Save Image </button>
</div>
</form>

<?php
echo !empty($uploaded)?"<div class= 'alert'> <p>$uploaded</p></div>":"";
?>

</div>

<div class='imagespanel'>
<h2>Uploaded Images</h2>
<?php
  $storeimage = new StoreImage;
  $images = $storeimage-> getAllImages();

  foreach($images as $image) {
  ?>
<div class='image' style="float: left; width:100%; height:100%; text-align: center"> 
<p>
<image width='250' height='auto' src='<?php echo "http://localhost/evari/photo/image.php?id=".$image['id']?>' />
</p>

<p>
<?php
echo $image['desc']; ?>

</p>

</div>
<?php
}
?>


</div>
</content>

<footer>
<p> Copyright &copy; 2018 <a href='https://www.sano.rw'>Sano</a></p>
</footer>
</body>
</html>




