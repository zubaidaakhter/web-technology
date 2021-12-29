function registration() {
		var fname = document.forms["RegForm"]["firstname"];
		var lname = document.forms["RegForm"]["lastname"];
		var age= document.forms["RegForm"]["Age"];
		var add = document.forms["RegForm"]["Address"];
		var phone = document.forms["RegForm"]["Phone"];
		var email =document.forms["RegForm"]["Email"];
		var user=document.forms["RegForm"]["username"];
		var pass = document.forms["RegForm"]["Password"];
        var license= document.forms["RegForm"]["Licensenumber"];
        var issuedate= document.forms["RegForm"]["Issuedate"];


		if (fname.value == "") {
			window.alert("Please enter your firstnamename.");
			fname.focus();
			return false;
		}
		if(lname.value == ""){
			window.alert("Please enter your lastname");
           lname.focus();
           return false;
		}
		if(age.value == ""){
			window.alert("Please enter your age");
			age.focus();
			return false;

		}

		if (add.value == "") {
			window.alert("Please enter your address.");
			add.focus();
			return false;
		}
		if(phone.value == ""){
			window.alert("please enter your Phone number.");
			phone.focus();
			return false;
		}

		if (email.value == "") {
			window.alert("Please enter a valid e-mail address.");
			email.focus();
			return false;
		}

		if (user.value == "") {
			window.alert("Please enter your username.");
			user.focus();
			return false;
		}

		if (pass.value == "") {
			window.alert("Please enter your password");
			pass.focus();
			return false;
		}

		if (license.value == "") {
			window.alert("Please enter your Licensenumber.");
			license.focus();
			return false;
		}
		if(issuedate.value == ""){
			window.alert("Please enter License Issuedate");
			issuedate.focus();
			return false;
		}

		return true;
	}