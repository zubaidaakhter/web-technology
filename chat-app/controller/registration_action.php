<?php

session_start();

require_once ('../model/sql_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            

            $id=$_POST['id'];
			$username=$_POST['username'];
		    $password=$_POST['password'];
		    $email=$_POST['email'];
		     
           if (empty( $id) or empty($username) or empty($password)or empty($email) ) 
			{
				echo "Please fill up the form properly";
			}
			
				else{
					$insert_query = mysqli_query($conn, "INSERT INTO chat(id,username,password,email)
                                VALUES ({$id}, '{$username}','{$password}', '{$email}')");
                                if($insert_query){
                	
					header('location: ../view/login.html');
                }

				else{
					echo"Error in input.please try again. ";
				}

				
			}
		}

		
	?>

