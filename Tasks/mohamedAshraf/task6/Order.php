<?php

class Order
{
    public function __construct(private Cart $shoppingCart)
    {
    }

    public function showOrderSummary()
    {
        echo $this->shoppingCart->calculateTotalPrice();
    }

    public function checkout(): void
    {
        echo "Order Summary:<br>";

        foreach ($this->shoppingCart->listProducts() as $product) {
            echo $product->getDetails() . "<br>";
        }

        echo "Total: $" . number_format($this->shoppingCart->calculateTotalPrice(), 2) . "<br>";
    }
}