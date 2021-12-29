<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 
	<title> Change Order Status</title>
	
 </head>
 <body style="text-align: center;"> 
  
  <header>
   
    <h1>Welcome to Medicine Order status</h1>
  
  </header>



<?php
    $handle = fopen("../model/orderData.json", "r");
    $data = fread($handle, filesize("../model/orderData.json"));
    $exploded = explode("\n", $data);

    $arr1 = array();
    for ($i =0; $i < count($exploded); $i++){

       $decode = json_decode($exploded[$i]);
       array_push($arr1, $decode);

  }

   ?>
   <table border="1" style="width:100%" align="center">
 <thead>
   <tr>
    <th>ORDER ID</th>
    <th>MEDICINE NAME</th>
    <th>BUYERS NAME</th>
    <th>QUANTITY</th>
   <th>STATUS</th>
</tr>
 </thead>
 


   <?php

  for ($i=0; $i < count($arr1)-1; $i++) {
    echo "<tr>";
    echo "<td>";
    echo $arr1[$i]->Order;
    echo "</td>";
    echo "<td>";
    echo $arr1[$i]->Customer;
    echo "</td>";
    echo "<td>";
    echo $arr1[$i]->Medicine;
    echo "</td>";
    echo "<td>";
    echo $arr1[$i]->Quantity;
    echo "</td>";
    echo"<td>";
    echo $arr1[$i]->OrderStatus;
     echo "</td>";
      
    
   echo "</tr>";
  }
    ?>
 </tbody>
</table>
<?php include 'footer.html';?>
  <p>  <a href="homepage.php">Back</a></p> 

    
</body>
</html>


