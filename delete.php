<?php


include ('classes/database.class.php');
include ('classes/product.class.php');
include ('classes/user.class.php');

$user = new User();

if (isset($_GET['uid'])) {
    $id = $_GET['uid'];
    $user->deleteUser($id);

}

$product = new Product();

if (isset($_GET['pid'])) {
    $id = $_GET['pid'];
    $product->delete($id);
}
