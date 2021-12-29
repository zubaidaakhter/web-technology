<?php

    session_start();
    setcookie("type", "", time()-3600);
   
    if(session_destroy()){

    header("location:homepage.php");	
    }
    
?>