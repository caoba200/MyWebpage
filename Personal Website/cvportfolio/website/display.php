<?php 
	$q = strval($_POST['q']);
	
	$con = mysqli_connect('localhost', 'caoba200', 'Anne123', 'caoba200');
	
	// Check connection
	if (!$con) {
		die('Could not connect: ' . mysqli_error($connect));
	}
	
	//Select database
	//mysqli_select_db($connect, "caoba200");
	$sql = "select * from User where email like '" . $q . "%'";
	$result = $con->query($sql);
	
	$allRows = array();
	
	// Loop through $result
	while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
		array_push($allRows, $row);
	}
	
	echo json_encode($allRows);
	
	mysqli_close($con);
	
?>

