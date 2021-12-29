
<?php

session_start();

 require_once ('../model/sqlconnection.php');
 if(isset($_COOKIE["type"]))
{
 header("location:../view/dashboard.php");
}
	
	if(isset($_POST['LOGIN'])){
         $username 	=mysqli_real_escape_string($conn, $_POST['username']);
		$Password 	=mysqli_real_escape_string($conn, $_POST['Password']);
          if( empty($username) || empty($Password))
          {
              if (empty($username))
                echo "Please enter your username.";
            if (empty($Password))
                echo "Please enter your password.";
          }
      	 
          	
          
          $query = "SELECT * FROM data WHERE username='$username' AND Password='$Password'";
        $result = mysqli_query($conn, $query);
         $user = mysqli_fetch_assoc($result);
		if ($user) { 
    
      $_SESSION ['username']=$username;
      setcookie("username","",time()+86400 ,"/");
			header('location: ../view/dashboard.php');
                }

				else{
					echo"Error in input.please try again. ";
				}
              
	
	}
?>
