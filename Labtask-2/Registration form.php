<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>Registration Form</title> 
</head>
<body>
	<h1> Registration form</h1>
	<form>
	<fieldset>
		
	<legend>Basic Information</legend>
     
     <label for="firstname">First name:</label> 
		<input type="text" name="firstname" id="firstname">
		<br><br>

     <label for="lastname">Last Name:</label>
		<input type="text" name="lastname" id="lastname">
		<br><br>

  
     <label for="gender">Gender:</label>
		<input type="radio" name="female" value="male">Male
		<input type="radio" name="male" value="female">Female
		<br><br>
	 <label for="Date of Birth">Date of Birth:</label>
	 <input type="date" name="Date of Birth" value="Date of Birth" > <br><br>

	 <label>Religion:</label>
		<select>
			<option value="Islam">Islam</option>
			<option value="Hindu">Hindu</option>
			<option value ="Christan">Christan</option>
		</select>


	</fieldset>
</form>
 
 <form>
 	<fieldset>
 		
 	<legend>Contact Information</legend>

 	<label for="Present Address">Present Address:</label> 
		<input type="text" name="Present Address" area="Present Address"><br><br>

	<label for="Permanent Address">Permanent Address:</label> 
	<input type="text" name="Permanent Address" area="Permanent Address"><br><br>
   Phone:<input type="telephone" name="Phone"><br><br>
   Email:<input type="text" name="Email"><br><br>


 	</fieldset>
 </form>
 <fieldset>
 	<legend>Academic Information</legend>
 	    ID:<input type="text" name="ID"><br><br>
		Semester:<input type="text" name="Semester"><br><br>

</fieldset>
</form>
 <input type="submit" name="submit" value="submit">
</body>
</html>


