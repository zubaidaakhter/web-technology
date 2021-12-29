<?php 

session_start();

require_once ('../model/sqlconnection.php');


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $id = $_POST['id'];
      $Customer=$_POST['Customer'];
      $Medicine=$_POST['Medicine'];
      $Generics =$_POST['Generics'];
      $Quantity=$_POST['Quantity'];
      $Price=$_POST['Price'];
      $Payment=$_POST['Payment'];
      $OrderTime=$_POST['OrderTime'];
      $OrderStatus=$_POST['OrderStatus'];

      if (empty($id) or empty($Customer) or empty($Medicine) or empty($Generics) or empty($Quantity) or empty($Price) or empty($Payment) or empty($OrderTime) or empty($OrderStatus) ) {
        echo "Please fill up the form properly";
      }
       else {

        

          $query = "INSERT INTO order_data (id,Customer,Medicine,Generics,Quantity,Price,Payment,OrderTime,OrderStatus)
          VALUES ('$id','$Customer','$Medicine','$Generics','$Quantity','$Price','$Payment','$OrderTime','$OrderStatus')";
    mysqli_query($conn, $query);
    // $_SESSION['username'] = $username;
    $_SESSION['success'] = "data inserted";

     
       echo "inserted succesfully";
       // header('location: ../view/order-table.php');
       
         } 
        
        
        
        // else{
        //   echo"Error in input.please try again. ";
        // }

     
      
    }
   
    // function sanitize($data) {
    //   $data = trim($data);
    //   $data = stripslashes($data);
    //   $data = htmlspecialchars($data);
    //   return $data;
    // }
  ?>

<!-- </body>
</html> -->

<p>  <a href="Manage-order.php">Back</a></p> 
 



