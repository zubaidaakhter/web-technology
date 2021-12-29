
<html>
<body>
	

	<?php
	require ('../model/sqlconnection.php');
 if(isset($_POST['reset'])){
      if(mysqli_query($conn, "UPDATE data SET Password='$_POST[Password]' WHERE Email ='$_POST[Email]'"))
      {
           ?>
           <script type="text/javascript">
           alert("Password updated successfully");
          
         
           </script>

           <?php
            
      }
    }
 
 

	