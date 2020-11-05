<?php

class Product extends Database
{

    private $productId;
    private $name;
    private $description;
    private $price;
    private $count;


    public function add()
    {
        $sql = "INSERT INTO products (product_name, product_description, product_price, product_count) VALUES ('$this->$name', '$this->description', '$this->price', '$this->count')";
        $result = $this->connect()->query($sql);
        if (!$result) {
            echo "Something went wrong";
        }
    }

    public function update() {

    }

    public function getProductById($id)
    {
       return $this->single("SELECT FROM products WHERE product_id ={$id}");
    }

    public function updateProduct()
    {
    }

    public function getAllProducts(){
        return $this->allRecords("SELECT * FROM products");
    }

    public function deleteProduct($id) {
        $this->delete("DELETE FROM products where product_id =" . $id);
    }

}
