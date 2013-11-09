<?php
$uname = $_POST["uname"];
$pwd = $_POST["pwd"]; 

require_once('config.inc.php'); 
require_once('functions.inc.php'); 
session_start(); 
if ($_SESSION['logged_in'] == true) { 
 redirect('index.html'); 
} else { 
 if ( (!isset($uname)) || (!isset($pwd])) 
OR 
 (!ctype_alnum($uname)) ) { 
 redirect('index.html'); 
 }

 $mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, 
DB_DATABASE); 

 if (mysqli_connect_errno()) { 
 printf("Unable to connect to database: %s", 
mysqli_connect_error()); 
 exit();
}
 
 // Escape any unsafe characters before querying database 
 $username = $mysqli->real_escape_string($uname); 
 $password = $mysqli->real_escape_string($pwd); 
 
 // Construct SQL statement for query & execute 
 $sql = "SELECT * FROM User WHERE UserUsername = '" . 
$username . "' AND UserPassword = '" . $password . "'"; 
 $result = $mysqli->query($sql); 
 
 // If one row is returned, username and password are valid 
 if (is_object($result) && $result->num_rows == 1) { 
 // Set session variable for login status to true 
 $_SESSION['logged_in'] = true; 
 redirect('test.html'); //user profile page
 } else { 
 redirect('index.html'); 
 }
} 
?>