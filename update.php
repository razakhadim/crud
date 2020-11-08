<!DOCTYPE html>
<html lang="en">

<!-- Update Profile Page
By: Raza Khadim
Date: 07/10/202 -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Account</title>
</head>

<body>

<?php
// include "../includes/header.php";
// include "../includes/db.php";

include "classes/database.class.php";
include "classes/user.class.php";

//check if logged in
// if(!isset($_SESSION['userEmail'])) {
// echo "<script>
// alert('You are not logged in.');
// window.location.href='/foodl/my-account.php';
// </script>";

//}
//To get the user id from last Get and assign a variable
if (isset($_GET['uid'])) {
    $id = $_GET['uid'];
}

//create a new user object and get details of the user by id
$user = new User();
$user->getUserById($id);

//get the form submission and add them as variables. Not including password field because user may not want to update their password.

if (isset($_POST['submit'])) {

    $user->setFirstName($_POST ['firstname']);
    $user->setLastName($_POST['lastname']);
    $user->setEmail($_POST ['email']);
    $user->setAddress($_POST['address']);
    $user->setPhone($_POST ['phone']);
    $user->updateProfile($id);
}

//to update the password and validate current password

if (isset($_POST['change_password'])) {

    $userCurrentPassword = $_POST['currentpassword'];
    $userNewPassword = $_POST['newpassword'];
    $user->changePassword($userCurrentPassword, $userNewPassword);
}
?>

    <div class="container forms">
        <div class="row">
            <div class="col-lg-6 ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Profile</h5>
                        <p class="card-text">Change the details and click update</p>
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="FName">First Name</label>
                                <input value="<?php echo $user->getFirstName(); ?>" type="text" class="form-control" name="firstname" id="FName">
                            </div>
                            <div class="form-group">
                                <label for="LName">Last Name</label>
                                <input value="<?php echo $user->getLastName(); ?>" type="text" class="form-control" name="lastname" id="LName">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email Address</label>
                                <input value="<?php echo $user->getEmail(); ?>" type="text" class="form-control" name="email" id="Email">
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Change Password</h5>
                        <form method="POST" action="#">
                            <div class="form-group">
                                <label for="CurrentPassword">Current Password</label>
                                <input type="password" class="form-control" name="currentpassword" id="currentpassword">
                            </div>
                            <div class="form-group">
                                <label for="NewPassword">New Password</label>
                                <input type="password" class="form-control" name="newpassword" id="newpassword">
                                <span id='message'></span>
                            </div>
                            <button name="change_password" type="submit" class="btn btn-primary">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>