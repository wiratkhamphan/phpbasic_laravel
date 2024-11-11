<h3>Class and Object</h3>

<?php 

// การสร้างคลาส
class Product {
    public $name;
    public $price;
}

// การสร้างวัตถุ
$product1 = new Product();
$product1->name = 'Product 1';
$product1->price = 100;

$product2 = new Product();
$product2->name = 'Product 2';
$product2->price = 200;

echo $product1->name;
echo '<br />';
echo $product1->price;

echo '<br />';
echo $product2->name;
echo '<br />';
echo $product2->price;
?>

