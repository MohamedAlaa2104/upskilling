<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="login_process.php" method="POST" class="form">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="You username ..." required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="./register.php">Register</a></p>
    </form>
</body>

</html>