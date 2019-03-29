<?php  /*
// Create connection by mysqli procedural
$con=mysqli_connect('127.0.0.1','root','mozal', 'college');
// Check connection to Server
       $output = '';
  
    //collect
     if(isset($_POST['search'])) {
       $searchq = $_POST['search'];
       $searchq = preg_replace("#[^0-9a-z]#i", "",$searchq);
       $query = $mysqli->prepare ("SELECT * FROM students WHERE student_name LIKE '%$searchq%' OR student_city LIKE '%$searchq%' ") or die ("Could not search!");
       $count = mysqli_num_rows($query);
       if($count == 0 ){
           $output = 'There was no search results!';
          }else {
                while($row = mysqli_fetch_array($query)){
                    $name = $row['student_name'];
                    $city = $row['student_city'];
                    $id = $row['sid'];

                     $output .= '<div>'.$name.' '.$city.'</div> ';

                    }
              }
      }

echo " . mysqli_error($con) . ";
*/?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
Search
</title>
<body>
         <form action="ind.php" method="post">
              <input type="text" name="search" placeholder="Search for.."/>
            <input type="submit" name="submit" value=">>" />
         </form>
         <?php echo  ($output) ?>
</body>
</html>
