<?php
define('DB_HOST','localhost');
define('DB_USER','paul');
define('DB_PASS','paul123');
define('DB_NAME','php_feedback');
// Connection
$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($conn -> connect_error){
    die('Connection failed'. $conn->connect_error);
}

?>
