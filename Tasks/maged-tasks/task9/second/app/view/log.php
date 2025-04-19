<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>صفحة مع Bootstrap</title>

    <?php


require_once __DIR__ . '/bootstrap.php';

use function app\view\loadBootstrap;

loadBootstrap();
    ?>
</head>
<body>
  

<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="col-6">
        <form method="POST" action="pro.php" class="p-4 border rounded shadow bg-light">
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                <small id="emailHelp" class="form-text text-muted">enter your name.</small>
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
           
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
