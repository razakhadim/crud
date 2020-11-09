<?php
// session_start();
require_once ("../oop/includes/header.php");
//require_once ('class-loader.inc.php');
//require_once ("database.class.php");
require_once ("classes/database.class.php");
require_once ("classes/product.class.php");



// $db = new Database();
// //$db->connect();

$product = new Product();

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
        foreach ($product->getAllProducts() as $data) {
       
        $productId = $data['product_id'];
        $productName = $data['product_name'];
        $productDescription = $data['product_description'];
        $productPrice = $data['product_price'];
        $productCount = $data['product_count'];

        echo "<tr>";
        echo "<td>{$productId}</td>";
        echo "<td>{$productName}</td>";
        echo "<td>{$productDescription}</td>";
        echo "<td>{$productPrice}</td>";
        echo "<td>{$productCount}</td>";
        echo "<td><a href='view_product.php?pid={$productId}'>view </a><a href='delete.php?pid={$productId}'>delete </a><a href='update_product.php?pid={$productId}'> update</a></td>";
        echo "</tr>";
       } 
    //   if ($_SESSION['user_role'] === 'foodling')
?>
</div>

