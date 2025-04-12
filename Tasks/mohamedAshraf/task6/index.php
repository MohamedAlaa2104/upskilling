<?php

include_once("./Cart.php");
include_once("./digitalProduct.php");
include_once("./physicalProduct.php");
include_once("./order.php");
include_once("./Product.php");


$ebook = new DigitalProduct("PHP for Beginners", 29.99, "Learn PHP OOP", ProductType::Book, "http://download.example.com/php-ebook");
$laptop = new PhysicalProduct("Laptop", 999.99, "16GB RAM, 512GB SSD", ProductType::Laptop, 2.5);

// Create a cart
$cart = new Cart();
$cart->addProduct($ebook);
$cart->addProduct($laptop);

// Place an order
$order = new Order($cart);
$order->checkout();