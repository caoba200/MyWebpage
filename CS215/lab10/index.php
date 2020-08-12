<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../components/includes.php'; ?>
        <link rel="stylesheet" href="lab10.css">
    </head>
    <body>
        <div class="form-container">
            <?php include 'forms.php';?>
        </div>

        <?php if(isset($_SESSION["email"])) { ?>
            <div class="card" style="width: 25rem;">
              <img class="card-img-top" src="https://cdn.pixabay.com/photo/2020/07/22/12/08/cats-eyes-5428855_960_720.jpg" alt="Image Upload" width="300" height="300">
              <div class="card-body">
                <h5 class="card-title">My User Profle</h5>
                <p class="card-text">Email: <?= $_SESSION["email"] ?></p>
                <p class="card-text">Birthday: <?= $_SESSION["DOB"] ?></p>
                <a href="logout.php" class="btn btn-primary">Logout</a>
              </div>
            </div>
        <?php }?>
    </body>
</html>
