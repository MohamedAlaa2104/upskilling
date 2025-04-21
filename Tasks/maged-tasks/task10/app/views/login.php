
<?php
session_start();

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
        
        <form method="POST" action="logincontroller.php" class="p-4 border rounded shadow bg-light">
        <h2 class="text-center mb-4 fw-bold" style="color: #0d6efd; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">Log In </h2>  
        <div class="form-group mb-3">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="username" id="name" placeholder="Enter your name">
                <small id="emailHelp" class="form-text text-muted">enter your name.</small>
            </div>

            <div class="form-group mb-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
           
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
