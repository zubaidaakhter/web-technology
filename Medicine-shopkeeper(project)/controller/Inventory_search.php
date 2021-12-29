<?php
session_start();

require_once ('../model/sqlconnection.php');

$sql = "SELECT * FROM indata WHERE Medicine LIKE'%".$_POST['name']."%' ";

$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>
		         <td>" .$row["Number"] . "</td>
		         <td>" . $row["Medicine"] . "</td>
		         <td>" . $row["date"] ."</td>
		         <td>" . $row["price"] ."</td>
		         <td>" .$row["stock"] . "</td>
		         </tr>";	
	}
}
else{
	echo"no result found";
}



?>