<?php

enum ProductType
{
    case Laptop;
    case Book;
}

class Product
{
    public function __construct(private string $name, private float $price, private string $description, private ProductType $type)
    {
    }

    public function getDetails()
    {
        echo "The $this->name, price is: $this->price, and $this->description.";
    }

    public function setPrice(float $newPrice)
    {
        $this->price = $newPrice;
        echo "Product price Updated";
    }


}