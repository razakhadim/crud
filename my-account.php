 
<!DOCTYPE html>
<html lang="en">


<!-- Foodl my account page
By: Raza Khadim
Date: 07/10/202 -->


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Account</title>
</head>

<body>

  <?php

  include 'includes/header.php'; ?>

  <div class="container forms">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form method="POST" action="/foodl/includes/signin.php">
              <div class="form-group">
                <label for="Email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" required>
              </div>
              <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" name ="password" class="form-control" id="password" required>
              </div>
              <button type="submit" name="login" class="btn btn-primary" >Login</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Sign Up</h5>
            <p class="card-text">If you don't have an account, enter details to sign up.</p>
            <form method="POST" action="../includes/signup.php">
              <div class="form-group">
                <label for="FName">First Name</label>
                <input type="text" class="form-control" name="firstname" id="FName" placeholder="John" required>
              </div>
              <div class="form-group">
                <label for="LName">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="LName" placeholder="Doe" required >
              </div>
              <div class="form-group">
                <label for="Email">Email Address</label>
                <input type="text" class="form-control" name ="email" id="Email" placeholder="john@doe.co.nz" required>
              </div>
              <div class="form-group">
                <label for="Password">Choose a Password</label>
                <input type="password" class="form-control" name="password" id="password1" placeholder="choose a password" required onkeyup='check();'>
              </div>
              <div class="form-group">
                <label for="ConfirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="password2" placeholder="re-enter your password" required onkeyup='check();'>
                <span id='message'></span>
              </div>
              <button name ="submit" type="submit" class="btn btn-primary">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>

