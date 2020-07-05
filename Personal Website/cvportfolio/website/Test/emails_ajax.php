<?php
	$db = mysqli_connect("localhost", "caoba200", "Anne123", "caoba200");
	// Check connection
	if(!$db) {
		die("Connection Error: " . $db->connect_error);
	}

	// Get the value from javascript
	if(isset($_GET["email"])) {
		$email = $_GET["email"];
	}
	else {
		$email = "";
	}

	$query = "SELECT email FROM UserInfo WHERE email LIKE '$email%'";
	$result = $db->query($query);
	if($result->num_rows > 0 {
		$json = array("emails" => array());
		while ($row = $result->fetch_assoc()) {
			$json["emails"][] = $row;
		}

		print json_encode($json);
		mysqli_free_result($result);
	}
	mysqli_close($db);
?>