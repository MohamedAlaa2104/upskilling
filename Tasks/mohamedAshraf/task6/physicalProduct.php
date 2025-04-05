<?php

class PhysicalProduct extends Product
{

    public function __construct($name, $price, $description, $type, private float $weght)
    {
        parent::__construct($name, $price, $description, $type);
    }
}