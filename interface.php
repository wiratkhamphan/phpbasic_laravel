<h3>Interface</h3>

<?php 
interface ProductInterface {
    public function getInfo();
}

class Product implements ProductInterface {
    public function getInfo() {
        return "Product";
    }
}

$product = new Product();
echo $product->getInfo();
?>

