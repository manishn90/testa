<html>
<body>

<?php

$name = $_GET["name"];
$pwd = $_GET["email"];


echo $name; 
echo $pwd; 


$dbhost = '128.199.156.68';
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

	$result = mysqli_query($con,"SELECT * FROM Persons");

	}
mysqli_close($con);

?>



</body>
</html>