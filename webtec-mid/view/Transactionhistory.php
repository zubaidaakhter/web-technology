<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Transaction History</title>
	
 </head>
 <body style="text-align: center;"> 
 	<h1> Welcome to transaction history</h1>

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
	
	<table border="1" align="center" style="width: 100%;">
    <thead>
    <tr>
     <th >ORDER ID</th>
     <th >MEDICINE NAME</th>
     <th >BUYERS NAME</th>
     <th >PRICE GIVEN</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($j=0; $j <count($arr1)-1; $j++) {
    echo "<tr>";
    echo "<td>";
    echo $arr1[$j]->Order;
    echo "</td>";
    echo "<td>";
    echo $arr1[$j]->Medicine;
    echo "</td>";
    echo "<td>";
    echo $arr1[$j]->Customer;
    echo "</td>";
      echo "<td>";
    echo $arr1[$j]->Price;
    echo "</td>";
    

    echo "</tr>";
    }
    ?>
    </tbody>
    </table>


<?php
 include ('footer.html');
 ?>

 <p>  <a href="homepage.php">Back</a></p> 

</body>
</html>