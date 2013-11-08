<html>
<body>

<?php

$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'slayer123';
$con=mysqli_connect($dbhost,$dbuser,$dbpass, "Outnabout");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$name = $_POST["name"];
$email = $_POST["email"];
$newpwd = $_POST["newpwd"];
$userusername = $_POST["userusername"];
$rnewpwd = $_POST["rnewpwd"];
$location = $_POST["location"];
$gender = $_POST["gender"];

$sql_insertuser="INSERT INTO User ( UserName, UserEmail, UserUsername, UserPassword, UserGender, UserLocation)
VALUES
('$name','$email','$userusername', '$newpwd','$gender','$location')";

if (!mysqli_query($con,$sql_insertuser))
  {
  die('Error: ' . mysqli_error($con));
  }

echo $html;
echo "The User has been successfully added to the database!!";

mysqli_close($con);
?>



</body>
</html>