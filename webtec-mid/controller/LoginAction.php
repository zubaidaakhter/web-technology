
<?php 
	session_start();

	if(isset($_POST['LOGIN'])){

		$username 	= $_POST['username'];
		$Password 	= $_POST['Password'];

		
		if($username != ""){
			echo "fill the username please..";
			if($Password != ""){
				echo "enter the password please...";

				$jsondata= file_get_contents('../model/data.json','r');
		      $json= json_decode($jsondata,true);

					
					{
					if(!empty($username) && !empty($Password)){
					//if($username == trim($user[0]) && $Password == trim($user[1])){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: ../view/homepage.php');
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
