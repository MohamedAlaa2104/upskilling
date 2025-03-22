<?php

namespace Classes;
class Person
{

    public function __construct(protected string $name, protected int $age, protected string $location = 'Cairo')
    {
        //
    }

    public function printMyName(): string
    {
        return $this->name;
    }
}