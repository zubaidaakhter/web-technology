
<?php
require_once ('../model/sqlconnection.php');
if(isset($_POST["id"], $_POST["Medicine"]))
{
 $id = mysqli_real_escape_string($conn, $_POST["id"]);
 $Medicine = mysqli_real_escape_string($conn, $_POST["Medicine"]);
 $Customer= mysqli_real_escape_string($conn, $_POST["Customer"]);
 $Generics = mysqli_real_escape_string($conn, $_POST["Generics"]);
 $Quantity = mysqli_real_escape_string($conn, $_POST["Quantity"]);
 $Price = mysqli_real_escape_string($conn, $_POST["Price"]);
 $Payment = mysqli_real_escape_string($conn, $_POST["Payment"]);
 $OrderTime = mysqli_real_escape_string($conn, $_POST["OrderTime"]);
 $OrderStatus= mysqli_real_escape_string($conn, $_POST["OrderStatus"]);
 


 $query = "INSERT INTO order_data (id,Customer,Medicine,Generics,Quantity,Price,Payment,OrderTime,OrderStatus) VALUES('$id','$Customer','$Medicine','$Generics','$Quantity','$Price','$Payment','$OrderTime','$OrderStatus')";
 if(mysqli_query($conn, $query))
 {
  echo 'Data Inserted';
 }
}
?>