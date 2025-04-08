<?php

namespace App;
include_once("Product.php");

class ProductService
{
    private array $products = [];

    public function __construct()
    {
        $this->products[] = new Product("iPhone", "Smartphone by Apple", 999.99);
        $this->products[] = new Product("Galaxy S24", "Samsung flagship", 899.99);
        $this->products[] = new Product("MacBook Pro", "Apple laptop", 1999.99);
    }

    public function getAllProducts()
    {
        print_r($this->products);
    }
}