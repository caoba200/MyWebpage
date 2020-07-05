<!DOCTYPE html>
<html>
<!--                     CODE FOR PHP AND MY SQL                             -->
		<?php
			$validateS = true;
			$error = "";
			$reg_Email = "/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/";
			$reg_Pswd = "/^(\S*)?\d+(\S*)?$/";
			$reg_Bday = "/^\d{1,2}\/\d{1,2}\/\d{4}$/";
			$emailS = "";
			$dateS = "mm/dd/yyyy";


			if (isset($_POST["submittedS"]) && $_POST["submittedS"])
			{
    				$emailS = trim($_POST["emailS"]);
    				$dateS = trim($_POST["dateS"]);
    				$passwordS = trim($_POST["passwordS"]);
       
    				$db = new mysqli("localhost", "caoba200", "Anne123", "caoba200");
    				if ($db->connect_error)
    				{
        				die ("Connection failed: " . $db->connect_error);
    				}
    
    				$q1 = "SELECT * FROM User WHERE email = '$emailS'";
    				$r1 = $db->query($q1);

    				// if the email address is already taken.
    				if($r1->num_rows > 0)
    				{
        				$validateS = false;
    				}
    				else
    				{
        				$emailMatch = preg_match($reg_Email, $emailS);
        				if($emailS == null || $emailS == "" || $emailMatch == false)
        				{
            					$validateS = false;
        				}
        
              
        				$pswdLenS = strlen($passwordS);
        				$pswdMatch = preg_match($reg_Pswd, $passwordS);
        				if($passwordS == null || $passwordS == "" || $pswdLenS < 8 || $pswdMatch == false)
        				{
            					$validateS = false;
        				}

        				$bdayMatch = preg_match($reg_Bday, $dateS);
        				if($dateS == null || $dateS == "" || $bdayMatch == false)
        				{
            					$validateS = false;
        				}
    				}

    				if($validateS == true)
    				{
        				$dateFormatS = date("Y-m-d", strtotime($dateS));
        				//add code here to insert a record into the table User;
        				// table User attributes are: email, password, DOB
        				// variables in the form are: emailS, passwordS, dateFormatS, 
        				// start with $q2 =
       					$q2 = "INSERT INTO User (email, password, DOB) VALUES ('$emailS', '$passwordS', '$dateFormatS')";
        				$r2 = $db->query($q2);
        
        				if ($r2 === true)
        				{
            					header("Location: Login.php");
            					$db->close();
            					exit();
        				}
    				}
    				else
    				{
        				$errorS = "email address is not available. Signup failed.";
       					 $db->close();
    				}

			}
		?>
	<head>
		<title>Sign Up</title>
		<script type="text/javascript" src="Signup.js"></script>
	</head>
	<body>
		<h3>Sign up </h3>
		<form id="formSignup" action="Signup1.php" method="post">
			<input type="hidden" name="submittedS" value="1"/>
			<table>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td id="email_S"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" id="emailS" name="emailS" value=""/></td>
				</tr>
				<tr>
					<td></td>
					<td id="pswd_S"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="passwordS" name="passwordS"/></td>
				</tr>

				<tr>
					<td></td>
					<td id="date_S"></td>
				</tr>
				<tr>
					<td>Birthday</td>
					<td><input type="text" id="dateS" name="dateS" value="mm/dd/yyyy"/></td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" value="Sign up"/><input type="reset" value="Reset"/></td>

				</tr>
			</table>
		</form>
		<script type="text/javascript" src="SignupR.js"></script>

		
	</body>
</html>

