<?php
session_start();
include 'db.php';


if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit();
}

$todo_id = $_POST['todo_id'];

$stmt = $conn->prepare("DELETE FROM todos WHERE id = ? AND user_id = ?");
$stmt->execute([$todo_id, $_SESSION['user_id']]);

header('Location: todo-list.php');
exit();


?>