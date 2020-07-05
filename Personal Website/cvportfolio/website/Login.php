<!DOCTYPE html>
	<html>
		<head>
			<title>Login</title>
			<script type="text/javascript" src="Login.js"></script>
		</head>
		<body>
			<h3>Login</h3>

			<form id="formLogin" action="Login.php" method="post">
				<input type="hidden" name="submittedL" value="1"/>
				<table>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>Password</td>
					</tr>
					<tr>
						<td id="emailMsg_L"></td>
						<td id="pswdMsg_L"></td>
					</tr>
						<td><input type="email" id="email" name="email" value=""/></td>
						<td><input type="password" id="password" name="password"/></td>
						<td><input type="submit" value="Login"/></td>
					</tr>

					<tr>
						<td>No account? <a href="Signup1.php">Sign up</a></td>
					</tr>
				</table>
			</form>

			<script type="text/javascript" src="LoginR.js"></script>

			<!--                        CODE FOR PHP AND MYSQL                   -->
			<?php

				$validateL = true;
				$reg_EmailL = "/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/";
				$reg_PswdL = "/^(\S*)?\d+(\S*)?$/";

				$emailL = "";
				$error = "";

				if (isset($_POST["submittedL"]) && $_POST["submittedL"])
				{
    					$emailL = trim($_POST["email"]);
    					$passwordL = trim($_POST["password"]);
    
    					$db = new mysqli("localhost", "caoba200", "Anne123", "caoba200");
    					if ($db->connect_error)
    					{
        					die ("Connection failed: " . $db->connect_error);
    					}

    					//add code here to select * from table User where email = '$emailL' AND password = '$passwordL'
    					// start with $q = 
       					$q = "select * from User where email='$emailL' AND password='$passwordL'";
    					$r = $db->query($q);
    					$row = $r->fetch_assoc();
    					if($emailL != $row["email"] && $passwordL != $row["password"])
    					{
        					$validateL = false;
    					}
   					else
    					{
        					$emailLMatch = preg_match($reg_EmailL, $emailL);
        					if($emailL == null || $emailL == "" || $emailLMatch == false)
        					{
            						$validateL = false;
        					}
        
        					$pswdLen = strlen($passwordL);
        					$passwordLMatch = preg_match($reg_PswdL, $passwordL);
        					if($passwordL == null || $passwordL == "" || $pswdLen < 8 || $passwordLMatch == false)
        					{
            						$validateL = false;
        					}
    					}
    
    					if($validateL == true)
    					{

        					session_start();
        					$_SESSION["email"] = $row["email"];
        					header("Location: index.php");
        					$db->close();
        					exit();
    					}
    					else 
    					{
        					$error = "The email/password combination was incorrect. Login failed.";
        					$db->close();
    					}
				}

			?>

		</body>
	</html>

