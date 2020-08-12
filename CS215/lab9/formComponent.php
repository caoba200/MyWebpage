<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

<form action="displayInfo.php" id="signup" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="email"><i class="fas fa-envelope"></i> Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
  </div>
  <div class="form-group">
    <label for="password"><i class="fas fa-key"></i> Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="file">Attach a File</label>
    <input type="file" class="form-control-file" id="file" name="file">
  </div>

  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
