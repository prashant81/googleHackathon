<?php
$uname = $_POST["uname"];
$pwd = $_POST["pwd"]; 


$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'slayer123';
$con=mysqli_connect($dbhost,$dbuser,$dbpass, "Outnabout");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$queryU = 'SELECT UserUsername FROM User WHERE UserUsername = $uname';
$queryP = 'SELECT UserPassword FROM User WHERE UserPassword = $pwd';
if ($queryU && $queryP){
	echo "well done";
}


?>