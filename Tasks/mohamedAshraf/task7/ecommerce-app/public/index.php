<?php

require_once __DIR__ . '/../vendor/autoload.php';
use App\ProductService;

include_once("../app/ProductService.php");

$productService = new ProductService();

$productService->getAllProducts();
