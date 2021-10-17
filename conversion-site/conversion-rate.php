<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Conversion Rate</title>
</head>
<body>
	<form action= "<?php.echo $_SERVER['php_SELF']?>"method="POST">
		<h1> Page 2[Conversion Rate]</h1>
		<h2> Conversion Site</h2>
	<br>

	<a href="home.php">1. Home</a>
	<a href="conversion-rate.php">2. Conversion Rate</a>  
	<a href="history.php">3. History</a> 
	<br>
	<h2>Converter Rate:</h2>

	        <label for="Category">Category:</label> 
		    <input type="text" name="Category" id="Category">
		    <label for="Unit">Unit:</label> 
		    <input type="text" name="Unit" id="Unit">
		    <label for="Rate">Rate:</label> 
		    <input type="text" name="Rate" id="Rate">

          <input type="submit" name="submit" value="submit">
      </form>
     
      </body>

  </html>
		    
