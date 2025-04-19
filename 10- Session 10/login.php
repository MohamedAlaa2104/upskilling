<?php
session_start();

include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");

    $stmt->execute([$username]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);


    if($user && password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        header('Location: todo-list.php');
    }else{
        echo "Invalid username or password";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</body>
</html>

