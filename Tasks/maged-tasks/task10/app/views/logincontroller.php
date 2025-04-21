<?php
session_start();
require __DIR__ . '/../db/db.php';
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit();
  }

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user =$stmt->fetch(PDO::FETCH_ASSOC);
    if($user && password_verify($password, $user['password']) && $user['is_admin'] ==1 ){
        $_SESSION['user_id'] = $user['id'];
        header("Location: admin.php");
        exit();
    }elseif ($user && password_verify($password, $user['password']) && $user['is_admin'] ==0  && $user['is_active'] ==0) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: watingpage.php");
        exit();
        
    }elseif($user && password_verify($password, $user['password']) && $user['is_admin'] ==0 && $user['is_active'] ==1 ) {
        
       
            $_SESSION['user_id'] = $user['id'];
            header("Location: welcome.php");
            exit();
        
    }else{
        $_SESSION['error'] = "Invalid username or password";
        header("Location: register.php");
        exit();
    }
      
    }
    

