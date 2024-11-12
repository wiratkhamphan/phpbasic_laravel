<h3>Multi Object</h3>


<?php 

class Product{
     public $name;
     public $price;

}


$product = new Product();
$product ->name = "Product 1";
$product ->price = 100;



$product1 = new Product();
$product1 ->name = "Product 2";
$product1 ->price = 1200;


echo $product ->name;
echo"<br>";
echo $product->price;

echo"<br>";
echo $product1 ->name;
echo"<br>";
echo $product1->price;
?>