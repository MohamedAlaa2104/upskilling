<?php

class Order
{
    private User $User;
    public function __construct(
        private string $id,
        private float $quantity,
        private float $totalPrice,
        private string $createdAt
    ) {
    }
}