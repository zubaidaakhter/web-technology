<html>
<body>
	<?php
	if($_SERVER['REQUEST_METHOD']=== 'POST'){
		
		$Password=$_POST['Password'];
		$Newpassword=$_POST['Newpassword'];
		
		{
			if(empty($Password))
				echo "please enter the password";
			if (empty($Newpassword))
				echo"please enter newpassword";
			
		}
	

	   if(!empty($Password) && !empty($Newpassword)){

	   	$userdata=json_decode(file_get_contents("data.json",true),true);
	   	//$arr1 = array('Password'=>$Password,'Newpassword'=>$Newpassword);
				$json = json_encode($arr1);
          foreach ($userdata as $arr1 => $value) 
          	if ($value["Password"]== $Password)
         $userdata[$arr1]["Password"]=$Newpassword;
      echo "Password changed successfully";
	   

          
    }

  $handle=fopen("data.json", "a");
  fwrite($handle, json_encode($userdata,JSON_PRETTY_PRINT));
     fclose($handle);

}
?>

</body>
</html>