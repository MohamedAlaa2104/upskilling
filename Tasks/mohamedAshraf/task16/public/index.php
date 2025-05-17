<?php

require_once __DIR__ . '/../vendor/autoload.php';
use App\Core\Application;
use App\Core\controllers\ContactController;


$app = new Application();

$app->router->get("/", "home");

$app->router->get("/contact", [ContactController::class, 'index']);
$app->router->post("/contact", fn() => 'contact');

$app->run();