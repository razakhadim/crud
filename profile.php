<?php
include ('classes/database.class.php');
//include ('classes/product.class.php');
include ('classes/user.class.php');
session_start();

$user = new User();

if (isset($_GET['uid'])) {

    //check if logged in

if(!isset($_SESSION['email'])) {
        echo "<script>
       alert('You are not logged in.');
        window.location.href='login.php';
        </script>";
   } else {
    $id = $_GET['uid'];
    $user->getUserById($id);
  }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css'>
    <title>Document</title>
</head>
<body>
    
<div class="container">
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-12 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600"><?php echo $user->getFirstName(); echo " "; echo $user->getLastName()?></h6>
                                <p><?php echo $user->getRole(); ?></p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Personal Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><?php echo $user->getEmail();?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400"><?php echo $user->getPhone(); ?></h6>
                                    </div>

                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Address</p>
                                        <h6 class="text-muted f-w-400"><?php echo $user->getAddress();?></h6>
                                    </div>

                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Other details</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Role</p>
                                        <h6 class="text-muted f-w-400"><?php echo $user->getRole(); ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Member since</p>
                                        <h6 class="text-muted f-w-400"><?php echo $user->getSignUpDate();?></h6>
                                    </div>
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true">Facebook</i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true">Twitter</i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true">Instagram</i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
</body>
</html>