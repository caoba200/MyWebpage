<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

<form action="login.php" id="login" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="loginemail"><i class="fas fa-envelope"></i> Email address</label>
    <input type="email" class="form-control" id="loginemail" name="loginemail" placeholder="Enter your email">
  </div>
  <div class="form-group">
    <label for="loginpassword"><i class="fas fa-key"></i> Password</label>
    <input type="password" class="form-control" id="loginpassword" name="loginpassword" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
  <p>No Account? Click on Sign Up tag to register for an account</p>
</form>
