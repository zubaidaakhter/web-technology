<!DOCTYPE html>
<html>
<head>
	<title>View Inventory-table </title>
	<link rel ="stylesheet" type="text/css" href="css/navbar.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style >
	body{
		padding: 0;
		margin:0;
		font-family: font-family: 'Poppins', sans-serif;: 
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
		box-shadow: 2px 2px 12px #bcacd4,-1px -1px 8px rgba(0,0,0,0);
		
		text-align: center;

	}
	th,td{
		padding: 12px
		text-align:left;
		border-bottom: 1px solid #44487c;
		
	}
	tr{
		cursor: pointer;
		background-color: #f2f2f2;
	}
	#header{
		/*background-color: #34bccc;*/
		color:#bcacd4;
	}
	h2{
		font-weight: 600;
		text-align: center;
		height: 50px;
		background-color:#bcacd4;
		color:#000000;
		padding: 10px 0px;
	}


</style>
<body>
	<nav>
<!-- style="position: sticky; top:0" -->
  <a class="logo" href="#"><i class="fas fa-stethoscope fa-2x">Doctor's Point</i></a>
  <ul class="nav-bar">
   <li class="nav-bar_item"><a href="">update</a></li>
    <li class="nav-bar_item"><a href="">delete</a></li>
    <li class="nav-bar_item"><a href="TrackInventory.php">Go back</a></li>
  </ul>
</nav>
<h2> Medicine Inventory Table</h2>
<hr> 
	<table>
		<tr id="header">
			<th> SERIAL</th>
			<th>MEDICINIE NAME</th>
			<th>DELIVERY DATE</th>
			<th>PRICE</th>
			<th>STOCK</th>
		</tr>

		<?php
		require_once ('../model/sqlconnection.php');

		$sql = "SELECT  Number,Medicine,date,price,stock from indata";
		$result=$conn-> query($sql);

		 if ($result-> num_rows> 0)
		{
			while ($row = $result-> fetch_assoc()) {
				echo "<tr><td>" .$row["Number"] . "</td><td>" . $row["Medicine"] . "</td><td>" . $row["date"] ."</td><td>" . $row["price"] ."</td><td>" .$row["stock"] . "</td></tr>";
			}
			echo "</table>";
		}
		else{
			echo "0 result";
		}

	

