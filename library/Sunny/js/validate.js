function validateRegister(){
	var error = false;

	var regfnameError = document.getElementById("regfnameError");
	if (register.regfname.value.length == 0)
	{
		regfnameError.innerHTML = "first name can't be empty";
		error = true;
	} else {
		regfnameError.innerHTML = "";
	}

	var lnameError = document.getElementById("reglnameError");
	if (register.reglname.value.length == 0)
	{
		reglnameError.innerHTML = "last name can't be empty";
		error = true;
	} else {
		reglnameError.innerHTML = "";
	}

	var regemailError = document.getElementById("regemailError");
	if (register.regemail.value.length == 0) 
	{
		regemailError.innerHTML = "email can't be empty";
		error = true;
	} else {
		regemailError.innerHTML = "";
	}

	var regusernameError = document.getElementById("regusernameError");
	if (register.regusername.value.length == 0)
	{
		regusernameError.innerHTML = "username can't be empty";
		error = true;
	} else {
		regusernameError.innerHTML = "";
	}

	var regpasswordError = document.getElementById("regpasswordError");
	if (register.regpassword.value.length == 0)
	{
		regusernameError.innerHTMl = "password can't be empty";
		alert("password can't be empty");
		error = true;
	} else {
		regusernameError.innerHTML = "";
	}

	if (error) {
		var errorRegisterDetails = regfnameError.innerHTML.concat("\n", reglnameError.innerHTML, "\n", regemailError.innerHTML, "\n", regusernameError.innerHTML, "\n", regpasswordError.innerHTML);
		alert("Please correct these errors:\n".concat(errorRegisterDetails));
		return false;
	}
}

function validateUpdate(){
	var error = false;

	var updfnameError = document.getElementById("updfnameError");
	if (update.updfname.value.length == 0)
	{
		updfnameError.innerHTML = "first name can't be empty";
		error = true;
	} else {
		updfnameError.innerHTML = "";
	}

	var lnameError = document.getElementById("updlnameError");
	if (update.updlname.value.length == 0)
	{
		updlnameError.innerHTML = "last name can't be empty";
		error = true;
	} else {
		updlnameError.innerHTML = "";
	}

	var updemailError = document.getElementById("updemailError");
	if (update.updemail.value.length == 0) 
	{
		updemailError.innerHTML = "email can't be empty";
		error = true;
	} else {
		updemailError.innerHTML = "";
	}

	var updpasswordError = document.getElementById("updpasswordError");
	if (update.updpassword.value.length == 0)
	{
		updpasswordError.innerHTML = "password can't be empty";
		error = true;
	} else {
		updpasswordError.innerHTML = "";
	}

	if (error) {
		var errorUpdateDetails = updfnameError.innerHTML.concat("\n", updlnameError.innerHTML, "\n", updemailError.innerHTML, "\n", updpasswordError.innerHTML);
		alert("Please correct these errors:\n".concat(errorUpdateDetails));
		return false;
	}
}