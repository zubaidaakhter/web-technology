<?php 
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashborad</title>
    <link rel ="stylesheet" type="text/css" href="css/dashboard.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:ital,wght@1,100&display=swap" rel="stylesheet">
        <link rel ="stylesheet" type="text/css" href="css/navbar.css" >
</head>

<style>
    h2{
        font-weight: 600;
        text-align: center;
        height: 50px;
        background-color:#24869e;
        color:#000000;
        padding: 10px 0px;
    }
    .button{
  padding: 15px;
  background:#34bccc;
  color: #fff;
  outline: none;
  border:none;
  font-weight: 700;
  text-transform: uppercase;
  border-radius: 50px;
}
</style>
<body>
    
    <nav>
  <a class="logo" href="#"><i class="fas fa-stethoscope fa-2x">Doctor's Point</i></a>
  <ul class="nav-bar">
    <!-- <li class="nav-bar_item"><a href="Login(shopkeeper).php">Go back</a></li> -->
    <li class="nav-bar_item"><a href="">about</a></li>
    <li class="nav-bar_item"><a href="">serves</a></li>
    <li class="nav-bar_item"><a href="">contact</a></li>
    <br>
    
    <!-- <li class="nav-bar_item"><a href="update_profile.php"></a></li> -->
     <li ><a href="logout.php"  class="button">Logout</a></li>
    
  </ul>
</nav> 
<!-- 
<main> -->
        <!-- <div class = "content-left"> -->

          <h2>MEDICINE SHOPKEEPER DASHBOARD</h2> 
          <h3 align="center">Welcome to the dashboard,<?php  echo($_SESSION['username'])?></h3>
           
            
           <div class="box-area">
            <div class="single-box">
                <div class="img-area"></div>
                    <div class="img-text">
                    <span class="header-text"><strong>Manage medicine</strong></span>
                    <br>
                    <a href="ManageMedicine.php" class="btn">view page</a>
                </div>
            </div>

            <div class="single-box">
                <div class="img-area"></div>
                    <div class="img-text">
                    <span class="header-text"><strong>Manage stock</strong></span>
                    <br>
                    <a href="TrackInventory.php" class="btn">view page</a>
                </div>
            </div>

            <div class="single-box">
                <div class="img-area"></div>
                    <div class="img-text">
                    <span class="header-text"><strong>Manage order</strong></span>
                    <br>
                    <a href="Manage-order.php" class="btn">view page</a>
                </div>
            </div>
        
            
            <!-- <div class="content-right"> -->
  

             <div class="single-box">
                <div class="img-area"></div>
                    <div class="img-text">
                    <span class="header-text"><strong>Track Inventory</strong></span>
                    <br>
                    <a href="in_search.php" class="btn">view page</a>
                </div>
            </div>

             <div class="single-box">
                <div class="img-area"></div>
                    <div class="img-text">
                    <span class="header-text"><strong>Transaction history</strong></span>
                    <br>
                    <a href="Transactionhistory.php" class="btn">view page</a>
                </div>
            </div>
      
<!-- </main> -->


<!-- </form> -->
</body>
</html>
