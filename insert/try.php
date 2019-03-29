<?php
 $db = mysqli_connect('localhost', 'root', 'mozal','testdb');
  if (mysqli_connect_errno())  {
      echo mysqli_connect_error();
      exit();
}   else {
    echo "Successful database connection";
}     

?>
