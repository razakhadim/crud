<?php
// session_start();
require_once ("../oop/includes/header.php");
//require_once ('class-loader.inc.php');
//require_once ("database.class.php");
require_once ("classes/database.class.php");
require_once ("classes/user.class.php");



// $db = new Database();
// //$db->connect();

$user = new User();

//check if user is logged in
if(!isset($_SESSION['email'])) { 
    echo "<script>
   alert('You are not logged in.');
    window.location.href='login.php';
    </script>";
}


// print_r($_SESSION['role']);
// echo $user->setRole("admin");
?>

<div class="container">
<table class="table table-bordered table-hover usertable">
<thead>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Role</th>
        <th>Admin</th>
    </tr>
</thead>

<tbody>
    <?php

    //getting all the user details and creating variables

   // $table = 'users';
   // $datas = $user->getAllUsers();
        foreach ($user->getAllUsers() as $data) {
       
        $userId = $data['user_id'];
        $userFname = $data['user_fname'];
        $userLname = $data['user_lname'];
        $userEmailId = $data['user_email'];
        $userRole = $data['user_role'];

        echo "<tr>";
        echo "<td>{$userId}</td>";
        echo "<td>{$userFname}</td>";
        echo "<td>{$userLname}</td>";
        echo "<td>{$userEmailId}</td>";
        echo "<td>{$userRole}</td>";
        echo "<td><a href='profile.php?uid={$userId}'>view </a><a href='delete.php?uid={$userId}'>delete </a><a href='update.php?uid={$userId}'> update</a></td>";
        echo "</tr>";
       } 
    //   if ($_SESSION['user_role'] === 'foodling')
?>
</div>

