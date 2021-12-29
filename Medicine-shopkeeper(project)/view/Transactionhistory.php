<?php
require('../model/sqlconnection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Transaction History</title>
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
    width: 1250px;
    height: 100px;
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
 </head>
 <body>
  <nav>
<!-- style="position: sticky; top:0" -->
  <a class="logo" href="dashboard.php"><i class="fas fa-stethoscope fa-2x">Doctor's Point</i></a>
  <ul class="nav-bar">
   <!-- <li class="nav-bar_item"><a href="">update</a></li> -->
    
    <li class="nav-bar_item"><a href="transaction_search.php">search</a> </li>
    <li class="nav-bar_item"><a href="dashboard.php">back</a></li>
  </ul>
</nav>
 <!-- <div class=" container box">
 <div class="dropdown">
 <button onclick="myFunction()" class="dropbtn"></button> 
 <div id="myDropdown" class="dropdown-content">
  <form method="POST" action="../controller/history.php">
    
  </div>
</div> -->

 	<h1 align="center"> Welcome to Medicine and transaction history</h1>
  <hr>
  
    <table>
     
        <tr id="header">
          <th>SERIAL </th>
          <th>ORDER ID</th>
          <th>CUSTOMER NAME</th>
          <th>MEDICINE NAME</th>
          <th>GENERICS NAME</th>
          <th>QUANTITY</th>
          <th>PRICE</th>
          <th>PAYMENT STATUS</th>
          <th>ORDER TIME</th>
          <th>ORDER STATUS</th>
        </tr>
       
      <?php
    $count=1; 

    $sql_query = "SELECT id,Customer,Medicine,Generics,Quantity,Price,Payment,OrderTime,OrderStatus from order_data";
    // $result=$conn-> query($sql);
    $result = mysqli_query($conn, $sql_query);
    while($row = mysqli_fetch_assoc($result)){ ?>
      <tbody>
<tr>
<td align="center"><?php echo $count; ?></td> 
<td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["Customer"]; ?></td>
<td align="center"><?php echo $row["Medicine"]; ?></td>
<td align="center"><?php echo $row["Generics"]; ?></td>
<td align="center"><?php echo $row["Quantity"]; ?></td>
<td align="center"><?php echo $row["Price"]; ?></td>
<td align="center"><?php echo $row["Payment"]; ?></td>
<td align="center"><?php echo $row["OrderTime"]; ?></td>
<td align="center"><?php echo $row["OrderStatus"]; ?></td>
<td align="center">

</tr>
<?php $count++;} ?>
</tbody>
</table>
</div>
</body>
</html>

