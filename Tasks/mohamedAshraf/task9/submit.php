<?php

use MohamedAshraf\Task9\Db;
require_once "vendor/autoload.php";


var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
}

if (empty($name) || empty($email) || empty($password)) {
    die("Please fill all required fields");
}

$password = password_hash($password, PASSWORD_DEFAULT);

$phone = trim($_POST['phone']);
$address = $_POST['address'];

$query = array(
    'name' => $name,
    'email' => $email,
    'password' => $password,
    'phone' => $phone,
    'address' => $address
);

$db = Db::CreateTable("users")->insert($query)->execute();