<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
</head>
<body>
<?php 

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$firstname = $_POST['firstname'];
			$last name = $_POST['lastname'];
			$dateofBirth =$_POST['dateofbirth'];
		    $Gender=$_POST['Gender'];
		    $Religion=$_POST['Religion'];
		    $phone=$_POST['phone'];
		     $username=$_POST['username'];
		    $Password=$_POST['Password'];
          

			if (empty($firstname) or empty($lastname) or empty($gender)or empty($Address) or empty ($Phone) or 
				empty($religion) or empty($username) or empty($Password) ) {
				echo "Please fill up the form properly";
			}
			else {
				$firstname = sanitize($firstname);
				$lastname = sanitize($lastname);
				$gender= sanitize($gender);
		        $Address= sanitize($Address);
		        $username=sanitize($username);

				
				$res= fwrite($handle, $sql ."\n");
				if ($res){
					echo "Registration Successful!!";
					
				}
				else{
					echo"Error in input.please try again. ";
				}

				
			}
		}

		function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

</body>
</html>