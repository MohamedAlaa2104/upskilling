<?php

namespace App;

use Ramsey\Uuid\Nonstandard\Uuid;

class Product
{
    public string $uuid;
    public function __construct(
        public string $name,
        public string $desc,
        public float $price,
    ) {
        $this->uuid = Uuid::uuid4()->toString();
    }
}