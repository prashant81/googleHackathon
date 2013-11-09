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
<<<<<<< HEAD
 
 // Construct SQL statement for query & execute 
 $sql = "SELECT * FROM User WHERE UserUsername = 
$uname AND UserPassword = $pwd"; 
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
=======


>>>>>>> 44a665eba4b0b838c3a6343d3661d22a24ad5812
?>