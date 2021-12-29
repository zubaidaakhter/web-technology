<?php
require ('../model/sqlconnection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit data</title>
	<link rel ="stylesheet" type="text/css" href="css/navbar.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style >
	body{
		padding: 0;
		margin:0;
		font-family: font-family: 'Poppins', sans-serif;
	}

	table{
		position: absolute;
		left: 50%;
		top:50%;
		transform: translate(-50%,-50%);
		border-collapse: collapse;
		width: 1000px;
		height: 200px;
		border:1px solid #12b8cc;
		box-shadow: 2px 2px 12px #285454,-1px -1px 8px rgba(0,0,0,0);
		
		text-align: center;

	}
	th,td{
		padding: 12px
		text-align:left;
		border-bottom: 1px solid #a4f4fc;
		
	}
	tr{
		cursor: pointer;
		background-color: #f2f2f2;
	}
	#header{
		background-color: #34bccc;
		color: #000000;
	}
	h2{
		font-weight: 600;
		text-align: center;
		background-color:#a4f4fc;
		color:#000000;
		padding: 10px 0px;
	}
	.b1{
  padding: 15px;
  background:#117165;
  color: #fff;
  outline: none;
  border:none;
  font-weight: 700;
  text-transform: uppercase;
  border-radius: 50px;
}
.b2{
  padding: 15px;
  background:#ed0000;
  color: #fff;
  outline: none;
  border:none;
  font-weight: 700;
  text-transform: uppercase;
  border-radius: 50px;
}

</style>
<body>
	<nav>
<!-- style="position: sticky; top:0" -->
  <a class="logo" href="#"><i class="fas fa-stethoscope fa-2x">Doctor's Point</i></a>
  <ul class="nav-bar">
   <li class="nav-bar_item"><a href="">update</a></li>
    <li class="nav-bar_item"><a href="">delete</a></li>
    <li class="nav-bar_item"><a href="Med_table.php">view-table</a> <li class="nav-bar_item"><a href="ManageMedicine.php">back</a></li></li>
  </ul>
</nav>
<!-- 
	<div class="form"> -->
		<h2> EDIT MEDICINE</h2>
		<hr>
		<table >
		<!-- width="100%" border="1" style="border-collapse: collapse;"> -->
			<!-- <thead> -->
				<tr id="header">
					<th><strong>SERIAL</strong></th>
					<th><strong>ID</strong></th>
					<th><strong>MEDICINE NAME</strong></th>
					<th><strong>DESCRIPTION </strong></th>
					<th><strong>PRICE</strong></th>
					<th><strong>STOCK</strong></th>
				</tr>
		
		<!-- </table> -->
		
		<?php
		$count=1; 

		$sql_query = "SELECT id,Medicine,description,price,stock from med_data";
		// $result=$conn-> query($sql);
		$result = mysqli_query($conn, $sql_query);
		while($row = mysqli_fetch_assoc($result)){ ?>
			<tbody>
<tr>
<td align="center"><?php echo $count; ?></td> 
<td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["Medicine"]; ?></td>
<td align="center"><?php echo $row["description"]; ?></td>
<td align="center"><?php echo $row["price"]; ?></td>
<td align="center"><?php echo $row["stock"]; ?></td>
<td align="center">
<button class="b1"><a href="edit_med.php?id=<?php echo $row["id"]; ?>">Edit</a></button>
</td>
<td align="center">
 <button class="b2"><a href="delete_med.php?id=<?php echo $row["id"]; ?>">Delete</a></button>
</td>
</tr>
<?php $count++;} ?>
</tbody>
</table>
</div>
</body>
</html>

