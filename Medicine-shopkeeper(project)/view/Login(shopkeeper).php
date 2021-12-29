<?php session_start() ;?>

<!DOCTYPE html>
<html>
<head>
	<script defer scr="js/login.js"></script>

	<script>
	function login() {
		var user = document.forms["logForm"]["username"];
		var pass = document.forms["logForm"]["Password"];
		
		if(user.value == ""){
			window.alert("Please enter your username");
			user.focus();
			return false;

		}

		if (pass.value == "") {
			window.alert("Please enter your password.");
			pass.focus();
			return false;
		}

		return true;
	}

</script>
	<meta charset="utf-8">
	<title>ShopKeeper Login</title>

	<link rel ="stylesheet" type="text/css" href="css/login_style.css" >
	<link rel ="stylesheet" type="text/css" href="css/navbar.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:ital,wght@1,100&display=swap" rel="stylesheet">

	
</head>

<body >
	<nav>
<!-- style="position: sticky; top:0" -->
  <a class="logo" href="homepage.php"><i class="fas fa-stethoscope fa-2x">Doctor's Point</i></a>
  <ul class="nav-bar">
    
    <li class="nav-bar_item"><a href="">about</a></li>
    <li class="nav-bar_item"><a href="">service</a></li>
    <li class="nav-bar_item"><a href="">contact</a></li>
    <li ><a href="ShopManager-form.php"  class="button">Sign up</a></li>
  </ul>
</nav> 
	<div id="error"></div>

	
	<form id="form"class="modal-content animate" name="logForm" action="../controller/LoginAction.php" onsubmit="return login()" method="post">
		<h1 class="heading"> LOGIN FORM</h1>
		<div class="form">
		<ul id="form-message">
			

		</ul>
<div class="container"  class="modal">
			
			 <h3><label for="username">USERNAME:  </label><input type="text" name="username" id="username" placeholder="Enter username" >
			</h3>
			<br>
		<h3><label for="Password">PASSWORD:  </label><input type="password" name="Password" id="Password" placeholder="Enter Password" ></h3>
		<br><br>
<!-- 
		<div class ="field button"> -->
		<input type="submit" name="LOGIN" value="Login" class="button1" id="login_btn">
		
		 <a href="change-password.php">Forgot Password?</a>
		 <br>
		 <br>

		 Not Registered <a href="ShopManager-form.php">  click here  </a> for Registartion. 
    
		</div>
	</div>
</form>
   <div id="ack"></div>
<?php

include ("footer.html");
?>


 
</body>
</html>
 