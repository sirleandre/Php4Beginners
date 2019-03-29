<?php 

$mysql_host = 'localhost';//Impossible error
$mysql_user = 'root';
$mysql_pass = 'mozal';
$mysql_db = 'college';

class ServerException extends Exception{}

class DatabaseException extends Exception{
  public function showSpecific() {
    return 'Error thrown on line'.$this->getLine().' in '.$this->getFile();
  } 
}

try {

if (mysqli_connect($mysql_host, $mysql_user, $mysql_pass)) {
   throw new ServerException('Could not connect to server.');
}else if (mysqli_select_db($mysql_db)) {
 throw new DatabaseException();
} else {
  echo 'Connected.';
}

} catch (ServerException $ex) {
  echo 'Error: '.$ex->getMessage();
} catch (DatabaseException $ex) {
  echo $ex->showSpecific();
}

?>
