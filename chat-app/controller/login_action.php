<?php

session_start();

require_once ('../model/sql_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            

            
			$username=$_POST['username'];
		    $password=$_POST['password'];
		   
		     
           if (empty($username) or empty($password) ) 
			{
				echo "Please fill up the form properly";
			}
			
				else{
					$insert_query = mysqli_query($conn, "SELECT * FROM chat WHERE username =('{$username}'");
                                if($insert_query){
                	
					header('location: ../view/homepage.html');
                }

				else{
					echo"Error in input.please try again. ";
				}

				
			}
		}

		
	?>

