<?php
/**
* Performs a search
*
* This class is used to perform search functions in a MySQL database
*
* @version 1.0
* @author John Morris <support@johnmorrisonline.com>
*/
class search {
/**
* MySQLi connection
* @access private
* @var object
*/
private $mysqli;

/**
* Constructor
*
* This sets up the class
*/
public function __construct() {
// Connect to our database and store in $mysqli property
$this->connect();
}
/**
* Database connection
* 
* This connects to our database
*/
private function connect() {
$this->mysqli = new mysqli( 'localhost', 'root', 'mozal', 'college' );
}

/**
* Search routine
* 
* Performs a search
* 
* @param string $search_term The search term
* 
* @return array/boolen $search_results Array of search results or false
*/
public function search($search_term) {
// Sanitize the search term to prevent injection attacks
$sanitized = $this->mysqli->real_escape_string($search_term);

// Run the query
$query = $this->mysqli->query("
SELECT student_name
FROM students
WHERE student_name LIKE '%{$sanitized}%'
OR body LIKE '%{$sanitized}%'
");

// Check results
if ( ! $query->num_rows ) {
return false;
}

// Loop and fetch objects
while( $row = $query->fetch_object() ) {
$rows[] = $row;
}

// Build our return result
$search_results = array(
'count' => $query->num_rows,
'results' => $rows,
);

return $search_results;
}
}


?>


