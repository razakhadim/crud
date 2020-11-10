<?php

class Product extends Database
{

    private $productId;
    private $productName;
    private $productDescription;
    private $productPrice;
    private $productCount;
    private $productImage;

    public function setProductId($productId) {
        $this->productId = $productId;
    }
    public function getProductId() {
        return $this->productId;
    }

    public function setProductName($productName) {
        $this->productName = $productName;
    }
    public function getProductName() {
        return $this->productName;
    }

    public function setProductDescription($productDescription) {
        $this->productDescription = $productDescription;
    }
    public function getProductDescrtiption() {
        return $this->productDescription;
    }

    public function setProductPrice($productPrice) {
        $this->productPrice = $productPrice;
    }
    public function getProductPrice() {
        return $this->productPrice;
    }

    public function setProductCount($productCount) {
        $this->productCount = $productCount;
    }
    public function getProductCount() {
        return $this->productCount;
    }

    public function setProductImage($productImage) {
        $this->productImage = $productImage;
    }

    public function getProductImage(){
        return $this->productImage;
    }

    
    public function updateProduct($productId){
        $this->stmt("UPDATE products SET product_name = '$this->productName', product_description = '$this->productDescription', product_price = '$this->productPrice', product_count ='$this->productCount' WHERE product_id = {$productId}");
        
        $redirectUrl = "/oop/view_product.php?pid={$productId}";
        header('Location: '.$redirectUrl);
  
     }

     public function addProduct()
     {
  
        $sql = "INSERT INTO products (product_name, product_description, product_price, product_count) VALUES ('$this->productName', '$this->productDescription', '$this->productPrice', '$this->productCount')";
        $result = $this->stmt($sql);
        if (!$result) {
           echo "database Something went wrong";
        }
     }

  
    public function getProductById($productId)
    {
      $result = $this->stmt("SELECT * FROM products WHERE product_id ={$productId}");
    
         while ($row = $result->fetch_assoc()){
          $this->setProductId($row['product_id']);
          $this->setProductName($row['product_name']);
          $this->setProductDescription($row['product_description']);
          $this->setProductPrice($row['product_price']);
          $this->setProductCount($row['product_count']);
          $this->setProductImage($row['product_image']);
      }
    }

    public function getAllProducts(){
        return $this->allRecords("SELECT * FROM products");
        
    }

    public function deleteProduct($productId) {
        $this->stmt("DELETE FROM products where product_id =" . $productId);
        $redirectUrl = "all_products.php?pid={$productId}";
      header('Location: '.$redirectUrl);
    }

    function resetProduct() {
        foreach ($this as $key => $value) {
            unset($this->$key);
        }
    }
}
