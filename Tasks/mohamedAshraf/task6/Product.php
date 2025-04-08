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

    public function getDetails(): string
    {
        return "Name: $this->name, Price: $$this->price, Description: $this->description";
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $newPrice)
    {
        $this->price = $newPrice;
        echo "Product price Updated";
    }
}