<?php

session_start();

require_once ('../model/sqlconnection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $id  = $_POST['id'];
      $Medicine = $_POST['Medicine'];
      $description=$_POST['description'];
        $price=$_POST['price'];
        $stock=$_POST['stock'];
        

      if (empty($id) or empty($Medicine) or empty($description)or empty($price) or empty ($stock) ) 
      {
        echo "Please fill up the form properly";
      }
      else {
        $query = "INSERT INTO med_data (id,Medicine,description,price,stock)
          VALUES('$id', '$Medicine', '$description','$price','$stock')";
    mysqli_query($conn, $query);
    // $_SESSION['username'] = $username;
    $_SESSION['success'] = "data inserted"; 
    header('location: ../view/ManageMedicine.php');

     
           // <script type="text/javascript">
           //  alert("data recorded successfully");
           
             
          
         
           // </script>

        
      
      // header('location:Med_table.php');

      //   $sql ="INSERT INTO  med_data  (id, Medicine,description,price,stock) VALUES (?,?,?,?,?)";
      // $stmtinsert=$conn->prepare($sql);
      // $result =$stmtinsert->execute([$id, $Medicine,$description,$price, $stock]);



      //        if($result){
                  
      //     header('location: ../view/login(shopkeeper).php');
      //           }

      //   else{
      //     echo"Error in input.please try again. ";
      //   }

        
      }
    }

    // function sanitize($data) {
    //  $data = trim($data);
    //  $data = stripslashes($data);
    //  $data = htmlspecialchars($data);
    //  return $data;
    // }
  ?>

