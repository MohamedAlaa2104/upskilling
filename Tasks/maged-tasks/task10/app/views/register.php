<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> register </title>

    <?php


require_once __DIR__ . '/bootstrap.php';

use function app\view\loadBootstrap;

loadBootstrap();

// include '/../db/db.php';
require __DIR__ . '/../db/db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password =password_hash($_POST['password'], PASSWORD_DEFAULT) ;
    $countOfUsers = $conn->prepare("SELECT COUNT(*) AS username FROM users;");
    $countOfUsers->execute();
     $count=$countOfUsers->fetch(PDO::FETCH_ASSOC);
    // $stmt = $conn->prepare("INSERT INTO users (username, password,is_admin,is_active) VALUES (?, ?,?,?)");
   
    $countOfUsers=$countOfUsers->fetch(PDO::FETCH_ASSOC);   
    if($count['username'] === 0){
        
         try {
            $stmt = $conn->prepare("INSERT INTO users (username, password,is_admin,is_active) VALUES (?, ?,?,?)");
        $stmt->execute([$username, $password,TRUE,TRUE]);
        header("Location: login.php");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    
    }
    else {
        try {
            $stmt = $conn->prepare("INSERT INTO users (username, password,is_admin,is_active) VALUES (?, ?,?,?)");
            $stmt->execute([$username, $password,FALSE,FALSE]);
            header("Location: login.php");
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        exit;
    }

 
   
 

   
}

    ?>
</head>
<body>
  

<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="col-6">
        <form method="POST" action="register.php" class="p-4 border rounded shadow bg-light">
        <h2 class="text-center mb-4 fw-bold" style="color: #0d6efd; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">Register </h2>  

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
