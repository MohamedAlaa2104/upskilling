<?php
session_start();
require __DIR__ . '/../db/db.php';
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit();
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];

    $stmt = $conn->prepare("UPDATE users SET is_active = 1 WHERE id = ?");
    $stmt->execute([$user_id]);

    
    header("Location: admin.php");
    exit();
} else {

    header("Location: admin.php");
    exit();
}