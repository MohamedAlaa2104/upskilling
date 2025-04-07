<?php

class DigitalProduct extends Product
{
    public function __construct($name, $price, $description, $type, private string $link)
    {
        parent::__construct($name, $price, $description, $type);
    }

    public function getDetails(): string
    {
        return parent::getDetails() . ", Download Link: $this->link";
    }
}