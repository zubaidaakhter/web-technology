<html>
<head>

<body style="text-align: center;">
<?php 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $Order = $_POST['Order'];
      $Customer=$_POST['Customer'];
      $Medicine=$_POST['Medicine'];
      $Generics =$_POST['Generics'];
      $Quantity=$_POST['Quantity'];
      $Price=$_POST['Price'];
      $Payment=$_POST['Payment'];
      $OrderTime=$_POST['OrderTime'];
      $OrderStatus=$_POST['OrderStatus'];

      if (empty($Order) or empty($Customer) or empty($Medicine) or empty($Generics) or empty($Quantity) or empty($Price) or empty($Payment) or empty($OrderTime) or empty($OrderStatus) ) {
        echo "Please fill up the form properly";
      }

      else {
        $OrderId = sanitize($Order);
       $Medicine = sanitize($Medicine);
        $Quantity=sanitize($Quantity);
        $Price= sanitize($Price);
         $Generics= sanitize($Generics);
            
        $handle = fopen("../model/orderData.json", "a");
        $arr1 = array('Order'=>$Order,'Customer'=>$Customer,'Medicine'=>$Medicine,'Generics'=>$Generics,'Quantity'=>$Quantity,'Price'=>$Price ,'Payment'=>$Payment,'OrderTime'=>$OrderTime,'OrderStatus'=>$OrderStatus);
        $json = json_encode($arr1);
        $res= fwrite($handle, $json ."\n");
        if ($res){
          echo "Registration Successful!!";
        }
        else{
          echo"Error in input.please try again. ";
        }

        
      }
    }

    function sanitize($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>

<!-- </body>
</html> -->

<?php
    $handle = fopen("../model/orderData.json", "r");
    $data = fread($handle, filesize("../model/orderData.json"));
    $exploded = explode("\n", $data);

    $arr1 = array();
    for ($i =0; $i < count($exploded); $i++){

       $decode = json_decode($exploded[$i]);
       array_push($arr1, $decode);
    }

    ?>
  
  <table border="1" align="center" style="width:100%">
    <thead>
    <tr>
      <th>ORDER ID</th>
     <th>CUSTOMER NAME</th>
    <th>MEDICINE NAME</th>
     <!-- <th>GENERICS NAME</th> --> 
    <th>QUANTITY</th>
    <th>PRICE</th>
    <th>PAYMENT STATUS</th>
    <th>ORDER TIME</th>
    <th>ORDER STATUS</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($j=0; $j <count($arr1)-1; $j++) {
    echo "<tr>";
    echo "<td>";
    echo $arr1[$j]->Order;
    echo "</td>";
    echo "<td>";
    echo $arr1[$j]->Customer;
    echo "</td>";
    echo "<td>";
    echo $arr1[$j]->Medicine;
    echo "</td";
    echo "<td>";
    echo $arr1[$j]->Generics;
    echo "</td>";
    echo "<td>";
    echo $arr1[$j]->Quantity;
    echo "</td>";
    echo "<td>";
    echo $arr1[$j]->Price;
    echo"</td>";
    echo "<td>";
    echo $arr1[$j]->Payment;
    echo "</td>";
    echo "<td>";
    echo $arr1[$j]->OrderTime;
    echo"</td>";
    echo "<td>";
    echo $arr1[$j]->OrderStatus;
    echo "</td>";


    echo "</tr>";
    }
    ?>
    </tbody>
    </table>
    <?php include 'footer.html';?>
 <p>  <a href="Manage-order.html">Back</a></p> 

</body>
</html>

