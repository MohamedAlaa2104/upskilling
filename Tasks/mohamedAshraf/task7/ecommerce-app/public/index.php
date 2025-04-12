<?php

require_once __DIR__ . '/../vendor/autoload.php';
use App\ProductService;

$productService = new ProductService();

$productService->getAllProducts();
