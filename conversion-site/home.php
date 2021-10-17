<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
</head>
<body>
	<form action="home.php" method="POST">
		<h1> Page 1[Home]</h1>
		<h2> Conversion Site</h2>
	<br>

	<a href="home.php">1. Home</a>
	<a href="conversion-rate.php">2. Conversion Rate</a>  
	<a href="history.php">3. History</a> 
	<br>

	<h2>Converter:</h2>

	 <label>Select Category:</label>
		<select>
			<option value="">Select a value</option>
			<option value="feet_to_inch">feet_to_inch</option>
			<option value="Kg_to_gram">Kg_to_gram</option>
			<option value ="Gram_to_Kg">Gram_to_Kg</option>
			<option value="inch_to_feet">inch_to_feet</option>

		</select>
		<br>
		<br>

		<label for="Value">Value:</label> 
		    <input type="text" name="Value" id="Value">
		    <input type="submit" name="submit" value="submit">
		    
		    <br>
		    <br>

		    <label for="Result">Result:</label> 
		    <input type="text" name="Result" id="Result">


</form>
</body>
</html>

