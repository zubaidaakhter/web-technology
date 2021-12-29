<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
</head>
<body>
<?php 

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$firstname = $_POST['firstname'];
			$lastname = $_POST['Lastname'];
			$Age=$_POST['Age'];
		    $Address=$_POST['Address'];
		    $Phone=$_POST['Phone'];
		    $Email=$_POST['Email'];
		     $username=$_POST['username'];
		    $Password=$_POST['Password'];
           $Licensenumber=$_POST['Licensenumber'];
            $Issuedate=$_POST['Issuedate'];

			if (empty($firstname) or empty($lastname) or empty($Age)or empty($Address) or empty ($Phone) or 
				empty($Email) or empty($username) or empty($Password) or empty ($Licensenumber) or empty( $Issuedate)) {
				echo "Please fill up the form properly";
			}
			else {
				$firstname = sanitize($firstname);
				$lastname = sanitize($lastname);
				$Age= sanitize($Age);
		        $Address= sanitize($Address);
		        $Phone=sanitize($Phone);
		        $Licensenumber=sanitize($Licensenumber);
                $Issuedate=sanitize($Issuedate);
                $username=sanitize($username);

				$handle = fopen("../model/data.json", "a");
				$arr1 = array('firstname'=>$firstname,'Lastname'=>$lastname,'Age'=>$Age,'Address'=>$Address,'Phone'=>$Phone,'Email'=>$Email,'username'=>$username,'Password'=>$Password,'Licensenumber'=>$Licensenumber,'Issuedate'=>$Issuedate);
				$json = json_encode($arr1);
				$res= fwrite($handle, $json ."\n");
				if ($res){
					//echo "Registration Successful!!";
					header('location: ../view/login(shopkeeper).html');
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