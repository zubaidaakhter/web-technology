<?php

$con = mysqli_connect("localhost","root","","shopmanager") ;


$filename = "data.json";
$data = file_get_contents($filename);


$array= json_decode($data, true);


    for($array as $row)
    {
        $sqlu = "INSERT INTO data (firstname, lastname, Age, Address, Phone, Email,username, Password, Licensenumber,Issuedate)
            VALUES ('".$row["firstname"]."', '".$row["lastname"]."', '".$row["Age"]."','".$row["Address"]."', '".$row["Phone"]."', '".$row["Email"]."','".$row["username"]."', '".$row["Password"]."', '".$row["Licensenumber"]."','".$row["Issuedate"]."')";

            mysql_query($con,$sqlu);
      
  }

echo "data inserted";
?>