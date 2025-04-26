<?php

require_once("./vendor/autoload.php");
use MohamedAshraf\Task10\Db;
session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = trim($_POST["name"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST['password']);
    $address = trim($_POST['address']);


    $query = Db::CreateTable("users")
        ->select()
        ->execute();

    if (count($query) > 0) {
        Db::CreateTable("users")->insert(array(
            'name' => $name,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'address' => $address,
        ))->execute();

    } else {
        echo "Nothing found";

        Db::CreateTable("users")->insert(array(
            'name' => $name,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'address' => $address,
            'is_admin' => true,
            'is_active' => true
        ))->execute();

    }
}

?>