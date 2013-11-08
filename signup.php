<html>
<body>

<?php
$name = $_POST["name"];
$email = $_POST["email"];
$newpwd = $_POST["newpwd"];
$rnewpwd = $_POST["rnewpwd"];
$location = $_POST["location"];
$gender = $_POST["gender"];


$db=mysql_connect  ("localhost", "root",  "slayer123") or die ('I cannot connect to the database because: ' . mysql_error());

$mydb=mysql_select_db("Outnabout");
=======
$mydb=mysql_select_db("Outnablout");

?>




</body>
</html>