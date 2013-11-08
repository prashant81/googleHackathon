<html>
<body>

<?php
$firstname = $_POST["firstname"];
$lasttname = $_POST["lastname"];
$newpwd = $_POST["newpwd"];
$rnewpwd = $_POST["rnewpwd"];


$db=mysql_connect  ("localhost", "root",  "slayer123") or die ('I cannot connect to the database because: ' . mysql_error());

$mydb=mysql_select_db("Outnabout");

?>




</body>
</html>