
function login() {
		var user = document.forms["logForm"]["username"];
		var pass = document.forms["logForm"]["Password"];
		
		if(user.value == ""){
			window.alert("Please enter your username");
			user.focus();
			return false;

		}

		if (pass.value == "") {
			window.alert("Please enter your password.");
			pass.focus();
			return false;
		}

		return true;
	}