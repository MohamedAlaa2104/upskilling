<?php

class User
{
    public function __construct(
        private int $id,
        private string $name,
        private string $phone,
        private string $password,
        private string $email,
        private string $addressm,
        private string $createdAt
    ) {
    }
}