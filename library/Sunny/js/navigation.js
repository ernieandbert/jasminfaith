function submitRegister() {

	var errorString = "please enter a";
	// password
    if($("#reg_password").val() == '') {
        //opacity 
        errorString = errorString + ", password ";

    } if($("#reg_username").val() == '') {
    	errorString = errorString + ", username";

    } if($("#reg_email").val() == '') {
		errorString = errorString + ", email";

	} if($("#fname").val() == '') {
		errorString = errorString + ", first name";

	} if($("#lname").val() == '') {
		errorString = errorString + ",last name";
	}

    if (errorString.length > 14) {
    	alert(errorString);
    } else {
        document.getElementById("registerForm").submit();
    }
}

function submitLogin () {

	var errorString = "please enter a";

	if($("#login_user").val() == '') {
		errorString = errorString + ', username';

	} if ($("#login_pass").val() == '') {
		errorString = errorString + ', password';
	}

    if (errorString.length > 14) {
    	alert(errorString);
    } else {
        document.getElementById("loginForm").submit();
    }

}

function submitUpdate () {

	var errorString = "please enter a";
	// password
    if($("#up_password").val() == '') {
        //opacity 
        errorString = errorString + ", password ";

    } if($("#up_username").val() == '') {
    	errorString = errorString + ", username";

    } if($("#up_email").val() == '') {
		errorString = errorString + ", email";

	} if($("#up_fname").val() == '') {
		errorString = errorString + ", first name";

	} if($("#up_lname").val() == '') {
		errorString = errorString + ",last name";
	}

    if (errorString.length > 14) {
    	alert(errorString);
    } else {
        document.getElementById("updateForm").submit();
    }

}

function toggle_visibility(secondNav, logo) {
    var e = document.getElementById('secondNav');
    if(e.style.display == 'none') {
        e.style.display = 'block';
        document.getElementById("logo").style.margin="10px auto 5px auto";
    }
    else {
        e.style.display = 'none';
    }
}

