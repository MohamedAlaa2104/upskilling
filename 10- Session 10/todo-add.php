<?php
session_start();
include 'db.php';

if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit();
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $stmt = $conn->prepare("INSERT INTO todos (title, description, user_id) VALUES (?, ?, ?)");
    $stmt->execute([$title, $description, $_SESSION['user_id']]);
    header('Location: todo-list.php');
    exit();
}

?>