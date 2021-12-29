<?php
session_start();

require_once ('../model/sqlconnection.php');

$sql = "SELECT * FROM order_data WHERE Medicine LIKE'%".$_POST['name']."%' ";

$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>
		         <td>" .$row["id"] . "</td>
		         <td>" . $row["Customer"] ."</td>
                 <td>" . $row["Medicine"] . "</td>
                 <td>" . $row["Generics"] ."</td>
		         <td>" .$row["Quantity"] . "</td>
		         <td>" .$row["Price"] . "</td>
		         <td>" .$row["Payment"] . "</td>
		         <td>" .$row["OrderTime"] . "</td>
		         <td>" .$row["OrderStatus"] . "</td>

		         </tr>";	
	}
}
else{
	echo"no result found";
}



?>