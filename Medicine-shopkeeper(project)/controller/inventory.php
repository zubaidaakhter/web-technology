<?php
session_start();

require_once ('../model/sqlconnection.php');

      if ($_SERVER['REQUEST_METHOD'] ==='POST') {

         $Number= $_POST['Number'];
         $Medicine=$_POST['Medicine'];
         $date= $_POST['date'];
          $price = $_POST['price'];
          $stock =$_POST['stock'];

        if (empty($Number) or empty($Medicine) or empty($date) or empty($price) or empty($stock))
        {
          
          echo "Please fill all the fields properly";
        }
        else {
          $query = "INSERT INTO indata (Number,Medicine,date,price,stock)
          VALUES('$Number', '$Medicine', '$date','$price','$stock')";
    mysqli_query($conn, $query);
    // $_SESSION['username'] = $username;
    $_SESSION['success'] = "data inserted";
header('location: ../view/view_In-table.php');
     
       echo "inserted succesfully";
       
         } 
       
      // else{
      //     echo"Error in input.please try again. ";
      //   }

          

        
      }
     
      
 ?>
