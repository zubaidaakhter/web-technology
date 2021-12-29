<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Manage Orders</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:ital,wght@1,100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel ="stylesheet" type="text/css" href="css/navbar.css" >
  <link rel ="stylesheet" type="text/css" href="css/M_med.css" >
</head>
<body >
    
<nav>
<!-- style="position: sticky; top:0" -->
  <a class="logo" href="dashboard.php"><i class="fas fa-stethoscope fa-2x">Doctor's Point</i></a>
  <ul class="nav-bar">
    <li class="nav-bar_item"><a href="dashboard.php">home</a></li>
    <li class="nav-bar_item"><a href="View_med.php">update</a></li>
    <li class="nav-bar_item"><a href="search_med.php">search</a></li>
    <li class="nav-bar_item"><a href="Med_table.php">view-table</a></li>
  </ul>
</nav> 
<form  action="../controller/Managemedicine.php" class="modal-content animate" method="POST" class="form">
	<h1 class= "heading"> WELCOME TO MANAGE MEDICINE </h1>
  <br>
  <div class="container" class= "modal">
    
     <!--  <legend><h3>INFORMATION</h3></legend> -->

       <label for="id">SERIAL:</label>
       <input type="text" name="id" id="id"placeholder="Enter Medicine Id"><br>
       <br>
       
       <label for="Medicine">MEDICINE NAME:</label>
       <input type="text" name="Medicine" id="Medicine" placeholder="Enter Medicine name" ><br>
       <br>
        
         <label for="description">DESCRIPTION:</label>
       <input type="text" name="description" id="description" placeholder="Enter Medicine description" ><br>
       <br>
       
       <label for="price">PRICE:</label>
       <input type="text" name="price" id="price" placeholder="Enter price" ><br>
       <br>
       <br>
       
       <label for="stock">STOCK:</label>
       <input type="text" name="stock" id="stock" placeholder="Enter stock of Medicine" ><br>
       <br>
       <br>
       <div class="filed button">

      <input type="submit"  name="submit"  value="SUBMIT" class= "button"><br><br>
  </div>
  </div>

  </form>

   


</body>

<?php 
include 'footer.html';

?>
  

</html>