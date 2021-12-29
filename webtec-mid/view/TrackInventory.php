
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Track Inventory</title>
</head>
<body style= "text-align:center;">
  <h1> Welcome to Medicine Inventory</h1>
  <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="POST">
    <fieldset>
      <legend><h3>INFORMATION</h3></legend>

       <label for="number">SERIAL:</label>
       <input type="text" name="number" id="number">
       
       <label for="Medicine">MEDICINE NAME:</label>
       <input type="text" name="Medicine" id="Medicine">

      <label for="date">DELIVERY DATE:</label>
       <input type="date" name="date" id="date">
        
        <label for="price">PRICE:</label>
       <input type="text" name="price" id="price">
       
       <label for="stock">STOCK:</label>
       <input type="text" name="stock" id="stock">
      
      <input type="submit"  name="submit"  value="Submit"><br><br>

     </fieldset>
  </form>
<?php

      if ($_SERVER['REQUEST_METHOD'] ==='POST') {

         $number= $_POST['number'];
         $Medicine=$_POST['Medicine'];
         $date= $_POST['date'];
          $price = $_POST['price'];
          $stock =$_POST['stock'];

        if (empty($number) or empty($Medicine) or empty($date) or empty($price) || empty($stock)){
          
          echo "Please fill all the fields properly";
        }
        else {
        
         
         $handle = fopen("../model/Indata.json", "a");
          $arr1 = array('number'=>$number,'Medicine'=>$Medicine,'date'=>$date,'price'=>$price,'stock'=>$stock);
          $arr1 = json_encode($arr1);
         $res= fwrite($handle, $arr1 . "\n");
         if ($res){
          echo "Registration Successful!!";
        }
        else{
          echo"Error in input.please try again. ";
        }

          
          //echo " information added successfull  ";

          

        }
      }

      function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      
?>
<?php
    $handle = fopen("../model/Indata.json", "r");
    $data = fread($handle, filesize("../model/Indata.json"));
    $exploded = explode("\n", $data);

    $arr1 = array();
    for ($i =0; $i < count($exploded); $i++){

       $decode = json_decode($exploded[$i]);
       array_push($arr1, $decode);

  }

   ?>
   <table border="1" style="width:100%" align="center">
 <thead>
   <tr>
    <th>SERIAL</th>
    <th>MEDICINE NAME</th>
    <th>DELIVERY DATE</th>
    <th>PRICE</th>
    <th>STOCK</th>
   </tr>
 </thead>
 <tbody>
   <?php

  for ($i=0; $i < count($arr1)-1; $i++) {
    echo "<tr>";
    echo "<td>";
    echo $arr1[$i]->number;
    echo "</td>";
    echo "<td>";
    echo $arr1[$i]->Medicine;
    echo "</td>";
    echo "<td>";
    echo $arr1[$i]->date;
    echo "</td>";
    echo"<td>";
    echo $arr1[$i]->price;
    echo "</td>";
     echo"<td>";
     echo $arr1[$i]->stock;
    echo "</td>";
    echo "</tr>";
  }
    ?>
 </tbody>
</table>
 <p>  <a href="homepage.php">Back</a></p> 

</body>
</html>