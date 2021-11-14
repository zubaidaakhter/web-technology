
<?php 
	session_start();
	$hostname = "localhost";
$username = "root";
$password = "";
$database = "eone";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
	die("Failed to Connect: " . $conn->connect_error);
}

	if(isset($_POST['Login'])){

		$Username 	= $_POST['Username'];
		$Password 	= $_POST['Password'];

		
		if($Username != ""){
			echo "fill the username please..";
			if($Password != ""){
				echo "enter the password please...";

				$sql = "SELECT Username, Password FROM login";
				$result = $conn->query($sql);

                 if ($result->num_rows > 0) {

	              while($row = $result->fetch_assoc()) {
		        echo $row["Username"];
		        // echo $row["Password"];
		       echo "<hr>";
	}

}
$conn->close();

					
					{
					if(!empty($username) && !empty($Password)){
					//if($username == trim($user[0]) && $Password == trim($user[1])){
						setcookie('flag', 'true', time()+3600, '/');
						header('homepage.html');
					}
				}

				echo "invalid username/password";

			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>
