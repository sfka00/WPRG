<?php


class Product{
    private $name = "";
    private $price = 0;
    private $quantity = 0;

    public function __construct($name, $price, $quantity){
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }
    public function __toString(){
        return "Product: " . $this->name . ", Price: " . $this->price . ", Quantity: " . $this->quantity;
    }
}

$obj = new Product("Laptop",1500,2);
echo $obj;


class Cart{
    private $products = [];

    public function __construct(){
        $this->products = [];
    }
    public function addProduct(Product $product){
        $this->products[] = $product;
    }
    public function removeProduct(Product $product){
        foreach($this->products as $index => $prod){
            if($prod->getName() == $product->getName()){
                unset($this->products[$index]);
                $this->products = array_values($this->products);
                break;
            }
        }
    }
    public function getTotal(){
        $total = 0;
        foreach($this->products as $product){
            $total += $product->getPrice() * $product->getQuantity();
        }
        return $total;
    }

    public function __toString(){
        $text = "<br>Products in cart: <br>";
        $result = "";
        foreach($this->products as $product){
            $result .= "Product: " . $product->getName() . ", Price: " . $product->getPrice() .", Quantity: ". $product->getQuantity() . "<br>";
        }
        $totalprice = "<br>Total price: " . $this->getTotal() . "\n";
        return $text . $result . $totalprice;
    }
}

$obj2 = new Cart();
$prod1 = new Product("Laptop",1500,2);
$prod2 = new Product("Headphones",250,2);
$obj2->addProduct($prod1);
$obj2->addProduct($prod2);
echo "<br>".$obj2;

?>