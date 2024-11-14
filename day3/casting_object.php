<h3>Casting Object</h3>

<?php 
class Product {
    public $name;
    public $price;

    public function __toString() {
        return "Name: {$this->name}  Price: {$this->price}";
    }
}

class Product2 {
    public $name;
    public $price;
}

$product = new Product();
$product->name = 'iPhone';
$product->price = 1000;

$array = (array) $product;
echo "<pre>";
print_r($array);
echo "</pre>";

echo (string) $product;


$product2 = new Product2();
$product2 = (object) $array; 
// casting array to object
echo "<pre>";
print_r($product2);
echo"</pre>";
?>
