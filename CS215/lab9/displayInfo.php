<!DOCTYPE html>

<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$email = $_POST['email'];
$pass  = $_POST['password'];

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["file"]["tmp_name"]);
  if($check !== false)
    $uploadOk = 1;
  else
    $uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) {
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
}
else {
  if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

?>

<html lang="en">
    <head>
        <?php include '../../components/includes.php'; ?>
        <link rel="stylesheet" href="css/displayInfo.css">
    </head>
    <body>
        <div class="card" style="width: 25rem;">
          <img class="card-img-top" src="<?= $target_file?>" alt="Image Upload">
          <div class="card-body">
            <h5 class="card-title">My User Profle</h5>
            <p class="card-text">Email: <?= $email ?></p>
            <p class="card-text">Password: <?= $pass ?></p>
            <a href="signup.php" class="btn btn-primary">Back to Signup Form</a>
          </div>
        </div>

    </body>
</html>


