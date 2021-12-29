<?php

session_start();

require_once ('../model/sqlconnection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $Age=$_POST['Age'];
        $Address=$_POST['Address'];
        $Phone=$_POST['Phone'];
        $Email=$_POST['Email'];
         $username=$_POST['username'];
        $Password=$_POST['Password'];
           $Licensenumber=$_POST['Licensenumber'];
            $Issuedate=$_POST['Issuedate'];

             if ( empty($firstname) || empty($lastname) || empty($Age) || empty($Address) || empty ($Phone) || empty($Email) || empty($username) || empty($Password) || empty ($Licensenumber) || empty( $Issuedate) ) {
            if (empty($firstname))
                echo "Please enter your firstname";
            if (empty($lastname))
                echo "Please enter your lastname";
            if (empty($Age))
                echo " age is required";
            if (empty($Address)) 
                echo " Address is required ";
            if (empty($Phone))
                echo " please enter the phone number";
            if (empty($Email)) 
                echo " email is required ";
            if (empty($username))
                echo " please enter your username";
            if (empty($Password))
                echo " Please enter your password";
            if (empty($Licensenumber))
                echo "Please enter your Licensenumber.";
            if(empty($Issuedate))
              echo "Please enter th License Issuedate.";
        }

      // if) 
      // {
      //  echo "Please fill up the form properly";
      
      else {

        $sql ="INSERT INTO  data (firstname, lastname, Age, Address, Phone, Email, username, Password, Licensenumber, Issuedate) VALUES ('$firstname', '$lastname','$Age', '$Address', '$Phone', '$Email','$username', '$Password', '$Licensenumber','$Issuedate')";
        echo $sql;
          $result   = mysqli_query($conn, $sql);
          echo $result;
          if ($result) {
            echo"registration done";


          }
    
    else 
    {
    echo "Error.Please try again";
  }
     
    }
  }

    // function sanitize($data) {
    //  $data = trim($data);
    //  $data = stripslashes($data);
    //  $data = htmlspecialchars($data);
    //  return $data;
    // }
  ?>

