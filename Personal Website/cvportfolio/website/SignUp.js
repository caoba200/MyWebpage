function SignUpForm() {

	var result = true;
	var a = document.forms.myForm.email.value;
	var b = document.forms.myForm.username.value;
	var c = document.forms.myForm.password.value;
	var d = document.forms.myForm.confirm_password.value;
	
	// javascript regular expression
	var email_v = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
	var uname_v = /^[a-zA-Z0-9_-]+$/;
	var pswd_v = /^(\S*)?\d+(\S*)?$/;
	
	// initialize message
	document.getElementById("email_msg").innerHTML ="";
	document.getElementById("uname_msg").innerHTML ="";
	document.getElementById("pswd_msg").innerHTML ="";
	document.getElementById("pswdr_msg").innerHTML ="";
	
	if (a == null || a == "" || email_v.test(a) == false) {
		document.getElementById("email_msg").innerHTML = "Email address empty or wrong format. example: username@somewhere.sth";
		result = false;
	}
	
	// validate username
	if (b == null || b == "" || uname_v.test(b) == false) {
		document.getElementById("uname_msg").innerHTML = "Please enter the correct format for Username. (No leading or trailing spaces)";
		result = false;
	}
	
	// validate password 
	if (c == null || b == "" || pswd_v.test(c) == false) {
		document.getElementById("pswd_msg").innerHTML = "Please enter the password correctly(8 characters long, at least one non-letter)";
		result = false;
	}
	
	// validate confirm password
	if (d == null || d == "" || d != c) {
		document.getElementById("pswdr_msg").innerHTML = "The confirmed password should be the same as the pasword above";
		result = false;
	}
	
	
	// Display user information if they are entered correctly
	if (result) {
		document.getElementById("display_info").innerHTML = "<h2>Display Information</h2>Email: " +a+"<br>"+"Username: " + b + "<br>" + "Password: " + c + "<br>" + "Confirm Password: " + d + "<br>";
		document.getElementById("myForm").reset();
	}
	

}

//*******************************************************************************************
function ResetForm() {
	document.getElementById("email_msg").innerHTML ="";
	document.getElementById("uname_msg").innerHTML ="";
	document.getElementById("pswd_msg").innerHTML ="";
	document.getElementById("pswdr_msg").innerHTML ="";

}