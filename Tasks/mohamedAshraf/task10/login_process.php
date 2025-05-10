<?php

require_once("./vendor/autoload.php");
use MohamedAshraf\Task10\Db;
session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST['password']);

    $query = Db::CreateTable("users")
        ->select("*", "username = '$username'")
        ->execute();

    if (count($query) > 0) {
        $isCorrectPassword = password_verify($password, $query[0]['password']);
        if ($isCorrectPassword && $query[0]['is_active']) {

            if ($query[0]['is_admin']) {
                header('Location: admin.php');
            }

            echo "logged in";
        } else {
            echo "contact admin to activate your account";
        }
    } else {
        echo "user not found";
    }

    // echo (array_values($query[0]['password']));


}

?>