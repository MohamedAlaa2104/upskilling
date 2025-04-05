<?php

//namespace App;

//require_once 'Traits/InteractWithFiles.php';

class Product
{
//    use InteractWithFiles;
    public function __construct(private string $name, private float $price)
    {
    }

//    public function uploadFile($file)
//    {
//        echo 'File uploaded successfully from class' . '<br>';
//    }
}
