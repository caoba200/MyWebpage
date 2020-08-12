<?php
    $validate = true;
    $email = trim($_POST["loginemail"]);
    $password = trim($_POST["loginpassword"]);
    $sql = include '/home/hercules/c/caoba200/config/mysql_config.php';

    $db = new mysqli("localhost", $sql["username"], $sql["password"], $sql["dbname"]);
    if ($db->connect_error)
    {
        die ("Connection failed: " . $db->connect_error);
    }

    //add code here to select * from table User where email = '$email' AND password = '$password'
    // start with $q =
    $q = 'SELECT * FROM User WHERE email = "' . $email . '" AND  password = "' . $password . '"';

    $r = $db->query($q);
    if (!$r) {
        echo "wrong query";
        $db->close();
    }
    else {
        $row = $r->fetch_assoc();
        if($email != $row["email"] && $password != $row["password"])
        {
            $validate = false;
        }

        if($validate == true)
        {
            session_start();
            $_SESSION["email"] = $row["email"];
            $_SESSION["DOB"] = $row["DOB"];
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
