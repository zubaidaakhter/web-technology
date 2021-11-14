<?php

$hostname ="localhost";
$username ="root";
$password ="";

// $conn = new mysqli_connect($hostname , $root, $password);

$conn = new mysqli($hostname , $username, $password);

if($conn->connect_error){
	die("Failed to  connect:" . $conn->connect_error);
}
else{
	echo "connection successful";
}

$conn->close();

?>



