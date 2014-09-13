<html>
<body>

<?php

$name = $_GET["name"];
$pwd = $_GET["password"];


echo "Welcome "  $_POST["name"]; 
echo "Your email password is: "  $_POST["password"]


/*

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '3zvVfobG39';
$dbname = 'testbase';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);


$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
	echo "database found and connected";

	$result = mysqli_query($con,"SELECT * FROM user");

		while($row = mysqli_fetch_array($result)) {
		  echo $row['name'] . " " . $row['pwd'] . " " . $row['id'];
		  echo "<br>";
		}

	}
mysqli_close($con);
*/


?>



</body>
</html>