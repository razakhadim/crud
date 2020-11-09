<?php

include('../classes/database.class.php');
include('../classes/user.class.php');

$user = new User();
if(!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["password1"]) && !empty($_POST["email"])) {
if (isset($_POST['register'])) {
        $user->setFirstName($_POST["fname"]);
        $user->setLastName($_POST["lname"]);
        $user->setEmail($_POST["email"]);
        $user->setPassword($_POST["password1"]);
        $user->setPhone($_POST["phone"]);
        $user->setAddress($_POST["address"]);
        $user->add();
        
        echo "<script>alert('Account created.');
        window.location.href='../register.php?created';
        </script>";
     //   $user->resetUser();
    }
} else {
    echo "<script>alert('All fields are required.');
    </script>";
}

?>

