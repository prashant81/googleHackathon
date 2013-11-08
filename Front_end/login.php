<html>
<body>

<?php
$uname = $_POST["uname"];
$pwd = $_POST["pwd"]; 

$db=mysql_connect  ("localhost", "root",  "slayer123") or die ('I cannot connect to the database because: ' . mysql_error());

$mydb=mysql_select_db("Outnablout");

?>




</body>
</html>