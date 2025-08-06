<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');     // or 127.0.0.1
define('DB_USERNAME', 'root');        // default for XAMPP
define('DB_PASSWORD', '');            // default is empty in XAMPP
define('DB_NAME', 'items');           // your database name
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>