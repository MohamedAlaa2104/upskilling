<?php

require_once("./vendor/autoload.php");
use MohamedAshraf\Task10\Db;
session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    print_r($_POST);
    $userId = (int) trim($_POST["user_id"]);
    $currentStatus = (int) trim($_POST['current_status']);

    Db::CreateTable("users")->update([
        "is_active" => $currentStatus
    ], $userId)->execute();



    header('Location: admin.php');
    exit();

    // echo (array_values($query[0]['password']));


}

?>