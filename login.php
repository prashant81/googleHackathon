<?php


$uname = $_POST["uname"];
$pwd = $_POST["pwd"]; 


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'slayer123';
$con=mysqli_connect($dbhost,$dbuser,$dbpass, "Outnabout");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//echo "another thing";
$query = "SELECT * FROM User WHERE (UserUsername='$uname' AND UserPassword = '$pwd')";
//echo $query;
$result = mysqli_query($con, $query);

while($row = mysqli_fetch_array($result))
  {
  echo $row['UserUsername'] . " " . $row['UserPassword'];
  header("Location: home.html");
  echo "<br>";
  }

mysqli_close($con);
?>