<?php

include_once("./Product.php");
// The cart should:
//    Store an array of products.
//    Calculate the total price.
//    Allow adding/removing products.

class Cart
{
    public function __construct(private array $products = [])
    {
    }


    public function calculateTotalPrice(): float
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }

    public function addProduct(Product $newproduct)
    {
        array_push($this->products, $newproduct);
    }

    public function removeProduct(Product $newproduct)
    {
        $productIndex = array_search($newproduct, $this->products);
        array_splice($this->products, $productIndex);
        var_dump($this->products);
    }

    public function listProducts(): array
    {
        return $this->products;
    }
}