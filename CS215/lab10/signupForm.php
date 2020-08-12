<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

<form action="signup.php" id="signup" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="email"><i class="fas fa-envelope"></i> Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
  </div>
  <div class="form-group">
    <label for="password"><i class="fas fa-key"></i> Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="birthday"><i class="fas fa-birthday-cake"></i> Birthday</label>
    <input type="date" class="form-control" id="birthday" name="birthday" placeholder="dd/mm/yyyy">
  </div>

  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
