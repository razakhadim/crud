<?php

include('../classes/database.class.php');
include('../classes/product.class.php');

$product = new Product();
if(!empty($_POST["name"]) && !empty($_POST["description"]) && !empty($_POST["price"]) && !empty($_POST["count"])) {
if (isset($_POST['add_product'])) {
        $product->setProductName($_POST["name"]);
        $product->setProductDescription($_POST["description"]);
        $product->setProductPrice($_POST["price"]);
        $product->setProductCount($_POST["count"]);
        $product->addProduct();
        
        echo "<script>alert('Product Added.');
        window.location.href='../add_product.php?created';
        </script>";
         }
} else {
    echo "<script>alert('All fields are required.');
    </script>";
}

?>

