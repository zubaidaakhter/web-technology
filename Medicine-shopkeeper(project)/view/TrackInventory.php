
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Track Inventory</title>
  <link rel="stylesheet" type="text/css" href="css/in_med.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:ital,wght@1,100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel ="stylesheet" type="text/css" href="css/navbar.css" >
</head>
<body >
  <nav>
  <a class="logo" href="dashboard.php"><i class="fas fa-stethoscope fa-2x">Doctor's Point</i></a>
  <ul class="nav-bar">
    
    <li class="nav-bar_item"><a href="">about</a></li>
    <li class="nav-bar_item"><a href="">service</a></li>
    <li class="nav-bar_item"><a href="view_In-table.php">show-table</a></li>

    <!-- <li ><a href="Login(shopkeeper).php"  class="button">Login</a></li> -->
  </ul>
</nav>

 <!-- div class = "contect-center" > -->

 
  <form  action="../controller/inventory.php"  method="POST" class="modal-content animate">
    <h2 class="heading"> Welcome to Medicine Inventory</h2
      >
<!-- <main> -->
     
      <!-- <legend><h3>INFORMATION</h3></legend> -->
    <div class="container"  class="modal">
       <label for="Number">SERIAL:</label>
       <input type="text" name="Number" id="Number" placeholder="Enter number" required>
       <br>
       <br>
       
       <label for="Medicine">MEDICINE NAME:</label>
       <input type="text" name="Medicine" id="Medicine" placeholder="Enter Medicine name" required>
       <br>
       <br>

      <label for="date">DELIVERY DATE:</label>
       <input type="date" name="date" id="date">
       <br>
       <br>
        
        <label for="price">PRICE:</label>
       <input type="text" name="price" id="price" placeholder="Enter Medicine price" required>
       <br>
       <br>
       
       <label for="stock">STOCK:</label>
       <input type="text" name="stock" id="stock" placeholder="Enter Medicine stock" required>
       <br>
       <br>
      
      <input type="submit"  name="submit"  value="Submit" class="cta"><br>
      <br> 
    </div>
    </form>

    <?php

include ("footer.html");
?>
  
<!-- </main> -->
</body>
</html>
