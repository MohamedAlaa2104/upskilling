<?php

class PhysicalProduct extends Product
{

    public function __construct($name, $price, $description, $type, private float $weight)
    {
        parent::__construct($name, $price, $description, $type);
    }

    public function getDetails(): string
    {
        return parent::getDetails() . ", Weight: {$this->weight}kg";
    }
}