<?php
session_start();

require_once ('../model/sqlconnection.php');

$sql = "SELECT * FROM med_data WHERE Medicine LIKE'%".$_POST['name']."%' ";

$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>
		         <td>" .$row["id"] . "</td>
		         <td>" . $row["Medicine"] . "</td>
		         <td>" . $row["description"] ."</td>
		         <td>" . $row["price"] ."</td>
		         <td>" .$row["stock"] . "</td>
		         </tr>";	
	}
}
else{
	echo"no result found";
}



?>