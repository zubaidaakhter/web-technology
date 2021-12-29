<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Manage Orders</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:ital,wght@1,100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel ="stylesheet" type="text/css" href="css/navbar.css" >
  <link rel ="stylesheet" type="text/css" href="css/manage_order.css" >
</head>
<body >
  <nav>
<!-- style="position: sticky; top:0" -->
  <a class="logo" href="dashboard.php"><i class="fas fa-stethoscope fa-2x">Doctor's Point</i></a>
  <ul class="nav-bar">
    <li class="nav-bar_item"><a href="dashboard.php">home</a></li>
    <li class="nav-bar_item"><a href="View_med.php">about</a></li>
    <li class="nav-bar_item"><a href="search_med.php">service</a></li>
    <li class="nav-bar_item"><a href="order-table.php">view-table</a></li>
  </ul>
</nav> 

  <form  action="../controller/ManageOrder.php"   class="modal-content animate" method="POST">
  
  <h1 class="heading"> Welcome to Manage order </h1>

  <br>
    <div class ="container" class="modal">

      

       <label for="id">ORDER ID:</label>
       <input type="text" name="id" id="id" placeholder="Enter order Id">
       <br>
       <br>
       <label for="Customer">CUSTOMER NAME:</label>
       <input type="text" name="Customer" id="Customer" placeholder="Enter Customers name">
       <br>
       <br>
       <label for="Medicine">MEDICINE NAME:</label>
       <input type="text" name="Medicine" id="Medicine" placeholder="Enter Medicine name ">
       <br>
       <br>
        <label for="Generics">GENERICS NAME:</label>
        <input type="text" name="Generics" id="Generics" placeholder="Enter Generics name">
        <br>
        <br>
        <label for="Quantity">QUANTITY:</label>
       <input type="text" name="Quantity" id="Quantity" placeholder="Enter Medicine quantity">
       <br>
       <br>
       <label for="Price">PRICE:</label>
       <input type="text" name="Price" id="Price" placeholder="Enter price">
       <br>
       <br>
       PAYMENT STATUS:<select name="Payment" >
       <option>select an option</option>
       <option value="false">false</option>
       <option value="true">true</option>
       </select>

      <label for="OrderTime">ORDER TIME:</label>
       <input type="date" name="OrderTime" id="OrderTime"> 
       
       ORDER STATUS:<select name="OrderStatus">
            <option >select an option</option>
            <option value="delivered">DELIVERED</option>
            <option value="waiting">WAITING</option>
            <option value="canceled">CANCELED</option>
            <option value="pending">PENDING</option>
            <option value="On the way">ON THE WAY</option>
        </select>
       <br>
       <br>
      <div class="filed button">

      <input type="submit"  name="submit"  value="SUBMIT" class= "button"><br><br>
  </div>
</div>   
  </form>


 <!--  <form action="ManageOrder.php"><input type="submit" value="view table"></form>
  <br>
  <form action="homepage.php"><input type="submit" value="back"></form>
  <br> -->
<?php include 'footer.html';?>
</body>
</html>
