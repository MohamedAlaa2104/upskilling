
<?php

session_start();
if(!isset($_SESSION['user_id'])){
  header('Location: login.php');
  exit();
}
require __DIR__ . '/../db/db.php';



if (!isset($_GET['is_active'])) {
  $stmt = $conn->prepare("SELECT * FROM users WHERE is_admin =0");
  $stmt->execute();
  $allusers = $stmt->fetchAll(PDO::FETCH_ASSOC);

} elseif ($_GET['is_active'] == 0) {
  $stmt = $conn->prepare("SELECT * FROM users WHERE is_active = ?");
  $stmt->execute([0]);
  $allusers = $stmt->fetchAll(PDO::FETCH_ASSOC);

} elseif ($_GET['is_active'] == 1) {
  $stmt = $conn->prepare("SELECT * FROM users WHERE is_active = ? AND  is_admin=?");
  $stmt->execute(['1','0']);
  $allusers = $stmt->fetchAll(PDO::FETCH_ASSOC);
}






    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin controller </title>

    <?php


require_once __DIR__ . '/bootstrap.php';

use function app\view\loadBootstrap;

loadBootstrap();
    ?>
</head>
<body>


  
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form action="admin.php" method="post" class="w-100 d-flex justify-content-between align-items-center">
            <button  type="button" class="btn btn-primary"><a href="admin.php" class="btn btn-primary">كل المستخدمين</a>  </button>
        <button type="button" class="btn btn-success"> <a href="admin.php?is_active=1" class="btn btn-success">النشطين</a> </button>
        <button type="button" class="btn btn-danger">  <a href="admin.php?is_active=0" class="btn btn-danger">غير النشطين</a> </button>
        <button type="button" class="btn btn-dark">  <a href="logout.php">تسجيل الخروج</a> </button>
    </form>
  </div>
</nav>

<table class="table mt-5 container">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">USER NAME</th>
      <th scope="col">STATUS</th>
      
    </tr>
  </thead>
  <tbody>

  <?php $index = 1; foreach($allusers as $user): ?>
   <tr>
    <td><?php echo $index++; ?></td>
    <td><?php echo $user['username'] ?></td>
   <td>   
 
  <?php if ($user['is_active'] == 0): ?>
  <form action="activate.php" method="post">
    <input type="hidden" name="user_id" value="<?= $user['id']; ?>">
    <button type="submit" class="btn btn-success">تفعيل المستخدم</button>
  </form>
<?php else: ?>
  <button disable  class=" btn bg-secondary">تم التفعيل</button>
<?php endif; ?>
    </td> 
    
   </tr>
  <?php endforeach; ?>
 
    
  </tbody>
</table>



</body>
</html>
