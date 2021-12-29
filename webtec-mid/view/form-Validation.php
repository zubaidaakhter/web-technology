<html>
<body>
	<?php
	if(isset($_POST['next']))
	{
		$email=$_POST['email'];
		$userRole=$_POST['Usertype'] ?? "";

		$is_validate=true;
		function check()
		{
			global $is_validate;
			if(empty($email))
				$is_validate=false;
		}
		check();
		echo $is_validate;
        
        if(!empty($email) && !empty($userRole))
        {
        	setcookie("email",$email,time()+86400);
        	setcookie("userRole",$userRole,time()+86400);

        	if($userRole =='Manager')
        		header("location:Login(shopkeeper).html",TRUE,302);
        }
        else
        {
        	if (empty($email))
        	{
        		echo"please Enter the email";
        		echo"<br>";
        	}
        	if (empty($userRole))
        	echo "please Enter the userRole ";
        	
        }
    }


 	?>
 	<?php include 'footer.html';?>
</body>
</html>