<?php
require ('../model/sqlconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change-Password</title>
    <link rel ="stylesheet" type="text/css" href="css/forgetpassword.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel ="stylesheet" type="text/css" href="css/navbar.css" >
</head>
<body style="background: linear-gradient(to right, #c9d6ff, #e2e2e2)">
  <nav>
  <a class="logo" href="#"><i class="fas fa-stethoscope fa-2x">Doctor's Point</i></a>
  <ul class="nav-bar">
    <li class="nav-bar_item"><a href="Login(shopkeeper).php">Go back</a></li>
    <li class="nav-bar_item"><a href="">about</a></li>
    <li class="nav-bar_item"><a href="">serves</a></li>
    <li class="nav-bar_item"><a href="">contact</a></li>
  </ul>
</nav> 
  
<form action="../controller/Change-PasswordAction.php" method="POST">

    <h1 class="Change password"> RESET PASSWORD FORM</h1>
    <div class="input-group">
          <h3><label for="Email">EMAIL:</label>
        <input type="Email" id="Email" name="Email" placeholder="Enter your email" require></input><br></h3>
        <br>
      
         <h3><label for="Password">NEW PASSWORD:</label>
        <input type="password" id="Password" name="Password" placeholder="Enter password" require></input><br></h3>
      
      <div class ="field button">
    <input type="submit" name="reset" value="reset" class="button1">
     </div>
  
  </div>
 </form>
   
<?php
      include 'footer.html';
  ?>
</body>
</html