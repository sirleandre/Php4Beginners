<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Easy and Simple Image upload</title>
</head>
<body><!-- Iyi yo ntikora-->

        <div>
       Uploaded Images:
       <?php
              include('conn.php');
              $query=mysqli_query($conn, "select * from image_tb");
              while($row=mysqli_fetch_array($query)) {
                      ?>
                         <img src="<?php echo $row['img_location']; ?>">
                      <?php
              }
       ?>
       </div>
       <div>
       <form method="POST" action="upload.php" enctype="multipart/form-data">
       <label>Image: </label><input type="file" name="image" id="photo" value="upload" >
       <button type="submit">Upload</button>
       </form>
       </div>
</body>
</html>
