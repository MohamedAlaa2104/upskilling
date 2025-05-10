<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <form action="register_process.php" method="POST" class="form">
        <h2>Register</h2>
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="username" placeholder="username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="text" name="address" placeholder="Address">
        <button type="submit">Register</button>
        <p>Already have an account? <a href="./login.php">Login</a></p>
    </form>
</body>

</html>