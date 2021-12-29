<?php 
	//session_start();
	require_once ('../model/sqlconnection.php');

	if(isset($_POST['submit'])){

		 $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $Age=$_POST['Age'];
        $Address=$_POST['Address'];
        $Phone=$_POST['Phone'];
        $Email=$_POST['Email'];
        $username=$_POST['username'];
        $Password=$_POST['Password'];
        $Licensenumber=$_POST['Licensenumber'];
        $Issuedate=$_POST['Issuedate'];

             if ( empty($firstname) || empty($lastname) || empty($Age) || empty($Address) || empty ($Phone) || empty($Email) || empty($username) || empty($Password) || empty ($Licensenumber) || empty( $Issuedate) ) {
            if (empty($firstname))
                echo "Please enter your firstname";
            if (empty($lastname))
                echo "Please enter your lastname";
            if (empty($Age))
                echo " age is required";
            if (empty($Address)) 
                echo " Address is required ";
            if (empty($Phone))
                echo " please enter the phone number";
            if (empty($Email)) 
                echo " email is required ";
            if (empty($username))
                echo " please enter your username";
            if (empty($Password))
                echo " Please enter your password";
            if (empty($Licensenumber))
                echo "Please enter your Licensenumber.";
            if(empty($Issuedate))
              echo "Please enter the License Issuedate.";
      }
		if ($Password == $Password) {
			$sql = "SELECT * FROM data WHERE username='$username'";
			$result = mysqli_query($conn, $sql);
			if (!$result->num_rows > 0) {
				$sql = "INSERT INTO data (firstname, lastname, Age, Address, Phone, Email, username, Password, Licensenumber, Issuedate) VALUES ('$firstname', '$lastname','$Age', '$Address', '$Phone', '$Email','$username', '$Password', '$Licensenumber','$Issuedate')";
				$result = mysqli_query($conn, $sql);
				if ($result) {
					$Password = "";
					$username = "";
					$Email = "";
					$_POST['Password'] = "";
					$_POST['username'] = "";
					$_POST['Email'] = "";
					header("Location:Login(shopkeeper).php");
				} else {
					echo "<script>alert('Username Already Exists.')</script>";
				}
			} else {
				echo "<script>alert('Something Went Wrong. fill the form first!')</script>";
			}
		} else {
			echo "<script>alert('enter Password.')</script>";
		}
	}
		
?>

<!DOCTYPE html>
<html>
<head>
	<script defer scr="js/registration.js"></script>


<title>Registration form</title>

<link rel ="stylesheet" type="text/css" href="css/registation_style.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link rel ="stylesheet" type="text/css" href="css/navbar.css" >
</head>

<body>
	 
<nav>
<!-- style="position: sticky; top:0" -->
  <a class="logo" href="homepage.php"><i class="fas fa-stethoscope fa-2x">Doctor's Point</i></a>
  <ul class="nav-bar">
    <li class="nav-bar_item"><a href="Login(shopkeeper).php">Go back</a></li>
    <li class="nav-bar_item"><a href="">about</a></li>
    <li class="nav-bar_item"><a href="search_med.php">serves</a></li>
    <li class="nav-bar_item"><a href="Med_table.php">contact</a></li>
  </ul>
</nav> 
		<form  class="modal-content animate" name="RegForm"  onsubmit="return registration()" method="post">
		<h1 class="heading"> REGISTRATION FORM</h1>
	
	<legend><h2>BASIC INFORMATION </h2> </legend>	
		 <div class="container"  class="modal">

				<label for="firstname">FirstName:</label> 
		    <input type="text" name="firstname" id="firstname"
		     placeholder="Enter firstname" require><br><br>

	    <label for="lastname">Lastname:</label> 
		  <input type="text" name="lastname" id="lastname" placeholder="Enter lastname" require><br><br>
		
		<label for="Age">Age:  </label>
			<input type="text" name="Age" id="Age" placeholder="Enter your age" require><br><br>

	    <label for="Address">Address:</label>
			<input type="text" name="Address" id="Address" placeholder="Enter your Address" require><br><br>

	    <label for="Phone">Phone:</label>
			<input type="text" name="Phone" id="Phone" placeholder="Enter your phone" require><br><br>

	    <label for="Email">Email:</label><input type="text" name="Email" id="Email" placeholder="Enter your email" require><br><br>
	     <label for="username">username:</label><input type="text" name="username" id="username" placeholder="Enter your username" require><br><br>
		
		<label for="Password">Password:</label><input type="password" name="Password" id="Password" placeholder="Enter your Password" require><br><br>
    

			<label for="Licensenumber">Licence Details:</label>
			<input type="text" name="Licensenumber" id="Licensenumber" placeholder="Enter your license" require><br><br>
             <label for="Issuedate">Issue Date:</label>
			<input type="DATE" name="Issuedate" id="Issuedate"><br><br>
			</div>
			<div class="field button">
		<input  type="submit" name="submit" class="button1" value="submit the form" ></div>
	<div class="link"> 
	</div>
		<!-- <input type= "submit" name="first-form.html" value="Go back"> -->
</div>
</form>
	<?php 
	include('footer.html');
	 ?>



   <!--  </fieldset> 
</div>
</div><br><br>


		<fieldset>
		<div> -->
    
  
			
<!-- </fieldset> -->
<!-- <script src="../js/registration_validation.js"></script> -->
	<!-- <form action=""><input type="submit" value="Back"></form> -->
    
</body>
</html>


