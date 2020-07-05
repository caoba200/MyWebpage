function clickSuggestion(event) {
	document.getElementById("email").value = event.currentTarget.innerHTML;
	document.getElementById("emails").innerHTML = "";
}

function Suggestion(event) {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			var reponseObject = JSON.parse(xhr.reponseText);
			document.getElementById("emails").innerHTML = "";
			for(var i = 0; i < reponseObject.emails.length; i++) {
				var ptag = document.createElement("p");
				ptag.innerHTML = reponseObject.emails[i].email;
				ptag.className = "user";
				ptag.addEventListener("click", clickSuggestion, false);
				document.getElementById("emails").appendChild(ptag);
			}
		}
	}

	// Send object to the server
	xhr.open("GET", "emails_ajax.php?email=" + encodeURIComponent(event.currentTarget.value), true);
	xhr.send();
}