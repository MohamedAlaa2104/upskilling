<?php
namespace App;
use Ramsey\Uuid\Uuid;
class Product {
    private string $uuid;
    private string $name;
    private string $description;
    private float $price;

    public function __construct(string $name, string $description, float $price)
    {
        $this->uuid = Uuid::uuid4()->toString();
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
    public function getUuid()
    {
        return $this->uuid;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }
}