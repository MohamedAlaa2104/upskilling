
<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit();
}


require __DIR__ . '/../db/db.php';

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> log in </title>
    <?php
require_once __DIR__ . '/bootstrap.php';
use function app\view\loadBootstrap;
loadBootstrap();
    ?>

 
</head>
<body>
  

<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="col-6">
        
        <form   class="p-4 border rounded shadow bg-light">
        <h2 class="text-center mb-4 fw-bold" style="color: #0d6efd; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">your account is not active yet</h2>  
        <a href="login.php"> RETURN TO LOG IN PAGE</a>
        
        </form>
    </div>
</div>

</body>
</html>
