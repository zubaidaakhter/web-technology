<?php
require('../model/sqlconnection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM med_data WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: View_med.php"); 
?>