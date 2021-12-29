<?php
 session_start();
  if(isset($_COOKIE['flag'])){

  }
 ?>


<html>
<head>
	<meta charset="utf-8">
	<title>ShopKeeper's homepage</title>
</head>
<body style="text-align: center;">
    
   <header> <p style="display: inline-block; ">
    <h2>Welcome to the ShopKeeper's Homepage! .</h2></p><br></header>
   
<fieldset>      

      <legend> <h3>DASHBOARD</h3> </legend>
          <tr> <br><br>
            <td><form action="ManageMedicine.php"><input type="submit" value="Manage Medicine"></form></td><br>
            <td><form action="Manage-order.html"><input type="submit" value="Manage Order"></form></td><br>
            <td><form action="TrackInventory.php"><input type="submit" value="Track Inventory"></form></td><br>
            <td><form action="ChangeOrderStatus.php"><input type="submit" value="Change Order Status"></form></td><br>
            <td><form action="Transactionhistory.php"><input type="submit" value="Transaction History"></form></td><br>

            </tr><br><br>
    </fieldset> 

<form action="logout.php"><input type="submit" value="LOGOUT"></form>
<!-- <a href="logout.php">Log out</a>
     -->
<?php

 include ('footer.html');

 ?>

</body>

</html>


