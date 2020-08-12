<?php

    $email = trim($_POST["email"]);
    $date = trim($_POST["birthday"]);
    $password = trim($_POST["password"]);
    $sql = include '/home/hercules/c/caoba200/config/mysql_config.php';

    $db = new mysqli("localhost", $sql["username"], $sql["password"], $sql["dbname"]);
    if ($db->connect_error)
    {
        die ("Connection failed: " . $db->connect_error);
    }

    $dateFormat = date("Y-m-d", strtotime($date));
    //add code here to insert a record into the table User;
    // table User attributes are: email, password, DOB
    // variables in the form are: email, password, dateFormat,
    // start with $q2 =
    $q2 = 'INSERT INTO User (email, password, DOB) VALUES (' . '"' . $email . '" , "' . $password . '" , "' . $dateFormat . '")';

    $r2 = $db->query($q2);

    if ($r2 === true)
    {
        header("Location: index.php");
        $db->close();
        exit();
    }
    else {
        echo "Wrong query";
    }
?>
