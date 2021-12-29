<?php
 require_once ('../model/sqlconnection.php');

if(isset($_POST["id"]))
{
 $query = "DELETE FROM order_data WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($conn, $query))
 {
  echo 'Data Deleted';
 }
}
?>
