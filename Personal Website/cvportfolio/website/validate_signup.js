function validateForm() {
	var a = document.forms.myForm.email.value;
	var b = document.forms.myForm.username.value;
	var c = document.forms.myForm.password.value;
	var d = document.forms.myForm.confirm_password.value;
	var rt = true;
	var result = "";
	
	if (a == null || a == "") {
		result += "Email:\n";
		rt = false;
	}
	if (b == null || b == "") {
		result += "Username:\n";
		rt = false;
	}
	if (c == null || c == "") {
		result += "Password:\n"
		rt = false;
	}
	if (d == null || d == "") {
		result += "Confirm password:\n"
		rt = false;
	}
	if (a.length > 60) {
		result += "Email's length has to be less than 60 characters!\n";
	}
	if (b.length > 40) {
		result += "Username's length has to be less than 40 characters!\n";
	}
	if (c.length != 8) {
		result += "Password has to be 8 characters long!\n";
	}
	if (c != d) {
		result += "Confirm password has to match password!\n";
	}
	if (result != "") {
		if (rt == false)
			result = "The following fields must be filled out:\n" + result;
		alert(result);
		return false;
	}
	
}
