<html>
<head><link rel="stylesheet" type="text/css" href="index.css"></head>
<title> Home </title>
</head>
<body>
<?php
 $user = $_COOKIE["user"];
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'slayer123';
$con=mysqli_connect($dbhost,$dbuser,$dbpass, "Outnabout");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$query = "SELECT * FROM User WHERE (UserUsername='$user')";
//echo $query;
$result = mysqli_query($con, $query);

while($row = mysqli_fetch_array($result))
  {
  //echo $row['UserUsername'] . " " . $row['UserPassword'];
  $userID = $row['UserID'];
  //echo $userID;
  }


echo "<table border='1'>
<tr>
<th>Event Name</th>
<th>Event Location</th>
<th>Event Date</th>
<th>Event Time</th>
<th>Event Price</th>
</tr>";

$queryinterest = "SELECT E.*, EI.* FROM User U, UserInterest UI, EventInterest EI, Event E 
WHERE U.UserID = UI.UserID AND UI.InterestID = EI.InterestID  AND EI.EventID = E.EventID AND U.UserID ='$userID'";
$retevents = mysqli_query($con, $queryinterest);
while($row1 = mysqli_fetch_array($retevents))
  {
 echo "<tr>";
  echo "<td>" . $row1['EventName'] . "</td>";
  echo "<td>" . $row1['EventLocation'] . "</td>";
  echo "<td>" . $row1['EventDate'] . "</td>";
  echo "<td>" . $row1['EventTime'] . "</td>";
  echo "<td>" . $row1['EventPrice'] . "</td>";
  echo "</tr>";
  
  }
  

mysqli_close($con);
?>

<div class= 'LocalHangouts'>
		<font color='white' size=100% >Local Hangouts</font>
</div>
<pre>

<div class= 'FindWhereToGo'>
		<font color='black' size=20px >find where to go</font>
</div>

<div id='bubbles'>
		<div class='bubble1'></div>
		<div class='bubble2'></div>
		<div class='bubble3'></div>
		<div class='bubble4'></div>
		<div class='bubble5'></div>
		<div class='bubble6'></div>
		<div class='magnifyingGlass'></div>
	</div>


<div class="topmenu"></div>
<div class = "home"><font size="3px" color="white"> Home </font></div>
<div class ="events"> <font size="3px" color="white"> Events </font></div>
<div class= "profile"><font size="3px" color="white"> Profile </font></div>
<div class = "logout"> <font size="4px" color="white"> Logout </font></div>

<form method="get" action="search.php"> 
<table cellpadding="0px" cellspacing="0px"> 
<tr> 
<td style="border-style:solid none solid solid;border-color:#4B7B9F;border-width:1px;">
<input type="text" name="zoom_query" style="width:300px; border:0px solid; height:40px; padding:0px 3px; position:fixed; top:300px; left:520px;"> 
</td>
</table>
</form>


<div class='block1'></div>

<div class='profilearea' padding=10px></div>
<div class='image1'>
<img src="http://upload.wikimedia.org/wikipedia/en/f/f5/Question_mark.PNG" STYLE="position:absolute; TOP:30px; LEFT:0px; WIDTH:180px; HEIGHT:250px; opacity:1">
</div>




</body>
</html>
