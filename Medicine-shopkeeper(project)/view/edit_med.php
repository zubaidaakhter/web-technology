
<?php
require ('../model/sqlconnection.php');
$id =$_REQUEST['id'];
$query = "SELECT * from med_data where id='".$id."'";
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title> update medicine </title>
  <link rel ="stylesheet" type="text/css" href="css/navbar.css" >
   <link rel ="stylesheet" type="text/css" href="css/edit_med.css" >
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>


<body>

<div class="form">
	 <nav>
  <a class="logo" href="#"><i class="fas fa-stethoscope fa-2x">Doctor's Point</i></a>
  <ul class="nav-bar">
   <li class="nav-bar_item"><a href="">update</a></li>
    <li class="nav-bar_item"><a href="">delete</a></li>
    <li class="nav-bar_item"><a href="Med_table.php">view-table</a>
     <li class="nav-bar_item"><a href="ManageMedicine.php">back</a></li></li>
  </ul>
</nav><!-- 
<form class="modal-content animate"> -->

<h1 class="heading"> UPDATE RECORDS </h1>
<hr>
<div class="container" class="model">
 
	<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{ 
$id=$_REQUEST['id'];
$Medicine = $_REQUEST['Medicine'];
$description =$_REQUEST['description'];
$price =$_REQUEST['price'];
$stock = $_REQUEST['stock'];
$update="update med_data set Medicine='".$Medicine."', description='".$description."',price='".$price."',stock='".$stock."' where id='".$id."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>

<a href='View_med.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
	<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" >


    
    <input name="id" type="hidden" value="<?php echo $row['id'];?>" >
     <label for="id">SERIAL:</label>
	
      <p> <input type="text" name="id"  placeholder="enter id" required value="<?php echo $row['id'];?>" /></p>
      <br>
       
       <label for="Medicine">MEDICINE NAME:</label>
       <p><input type="text" name="Medicine" placeholder="enter medicine name" required value="<?php echo $row['Medicine'];?>"/></p><br>
       
        
         <label for="description">DESCRIPTION:</label>
      <p> <input type="text" name="description"  placeholder="enter description" required value="<?php echo $row['description'];?>"/></p>
       <br>
       
       <label for="price">PRICE:</label>
    <p><input type="text" name="price"  placeholder="enter price" required value="<?php echo $row['price'];?>"/></p><br>
       
       
       <label for="stock">STOCK:</label>
      <p><input type="text" name="stock"  placeholder="enter stock" required value="<?php echo $row['stock'];?>"/></p><br>
       

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
<?php

include 'footer.html';

?>
</body>

</html>
