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

include "includes/header.php";
include "classes/database.class.php";
include "classes/product.class.php";


$product = new Product();

//check if user is logged in
if(!isset($_SESSION['email'])) {
    echo "<script>
   alert('You are not logged in.');
    window.location.href='login.php';
    </script>";
}

if (isset($_GET['pid'])) {
    $productId = $_GET['pid'];
}

//create a new user object and get details of the user by id

$product->getProductById($productId);

//get the form submission and add them as variables. Not including password field because user may not want to update their password.

if (isset($_POST['add_product'])) {

    $product->setProductName($_POST ['name']);
    $product->setProductDescription($_POST['description']);
    $product->setProductPrice($_POST ['price']);
    $product->setProductCount($_POST['count']);
    $product->updateProduct($productId);
}

?>

    <div class="container forms">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Product</h5>
                        <p class="card-text">Change the details and click update</p>
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="FName">Product Name</label>
                                <input value="<?php echo $product->getProductName(); ?>" type="text" class="form-control" name="name" id="FName">
                            </div>
                            <div class="form-group">
                                <label for="LName">Description</label>
                                <input value="<?php echo $product->getProductDescrtiption(); ?>" type="text" class="form-control" name="description" id="LName">
                            </div>
                            <div class="form-group">
                                <label for="Email">Price</label>
                                <input value="<?php echo $product->getProductPrice(); ?>" type="number" class="form-control" name="price" id="price">
                            </div>
                            <div class="form-group">
                                <label for="Address">Product count</label>
                                <input value="<?php echo $product->getProductCount(); ?>" type="text" class="form-control" name="count" id="count">
                            </div>
                          
                            <button name="add_product" type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

</body>

</html>