<?php




session_start();
if(!isset($_SESSION['user_id'])){
  header('Location: login.php');
  exit();
}
require __DIR__ . '/../db/db.php';

echo "welcome"; 
