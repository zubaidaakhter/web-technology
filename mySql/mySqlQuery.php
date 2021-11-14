<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eone";

    
    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    
    $sql = "INSERT INTO login (Username,Password)
    VALUES ('John', '1234')";

     
    $sql = "INSERT INTO login (Username, Password)
    VALUES (?, ?)";

    
    $stmt = $conn->prepare($sql);


    $stmt->bind_param( $username, $password);

    
    $Username = "John";
    $Paasword = "1234";
    
    $stmt->execute();
    $stmt->close();

    
    $conn->close();


?>