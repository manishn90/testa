<html>
<body>




<?php
$name = $_POST["name"];
$pwd = $_POST["password"];


?>

Welcome <?php echo $name ; ?><br>
Your password address is: <?php echo $pwd ; ?>, it is being registered right now.
<br><br><br>




<?php


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
	echo "database found and connected <br><br>";

// Add person into database
mysqli_query($con,"INSERT INTO user (FirstName, LastName)
VALUES ($name, $pwd)");


// Display all users from database
	$result = mysqli_query($con,"SELECT * FROM user");

		while($row = mysqli_fetch_array($result)) {
		  echo $row['name'] . " " . $row['pwd'] . " " . $row['id'];
		  echo "<br>";
		}

	}
mysqli_close($con);



?>



</body>
</html>