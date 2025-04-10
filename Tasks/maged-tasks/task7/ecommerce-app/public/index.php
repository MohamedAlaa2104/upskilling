<?php
require_once "../app/ProductService.php";
require_once __DIR__ . '/../vendor/autoload.php';
use App\Product;
$product =new Product(name:"labtob" ,price:500,description:"newdevice");
echo "Product name : " . $product->getName() . "<br>";
echo "Description :  " . $product->getDescription() . "<br>";
echo "Price: " . $product->getPrice() . "<br>";
echo "UUID: " . $product->getUuid() . "<br>";
