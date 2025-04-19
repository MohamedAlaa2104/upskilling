
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
<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\classes\DB;




$connection =new DB();
$connection->table('users');
$data = [
    'order_name' => $_POST['order_name'],
    'order_price' => $_POST['order_price'],
    'order_quantity' => $_POST['order_quantity'],

];
// $connection->insert('orders',$data);
$connection->delete('orders', 7);



?>

<form action="pro.php" method="POST">
    <div class="container" style="width: 80%; margin-top: 20vh;">
        <div class="row g-3">
            <div class="col-md-3">
                <input type="text" class="form-control" name="order_name" placeholder="ORDER NAME" required>
            </div>
            <div class="col-md-3">
                <input type="number" step="0.01" min="0" class="form-control" name="order_price" placeholder="ORDER PRICE" required>
            </div>
            <div class="col-md-3">
                <input type="number" step="1" min="0" class="form-control" name="order_quantity" placeholder="ORDER AMOUNT" required>
            </div>
            <div class="col-md-3">
                <button  type="submit" class="btn btn-primary">Submit order</button>
            </div>
        </div>
    </div>
</form>

<div style="width: 80%; margin-top: 20vh;" class="mx-auto">
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ORDER NAME</th>
                <th scope="col">ORDER PRICE</th>
                <th scope="col">ORDER AMOUNT</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <th scope="row"><?= $order['id'] ?></th>
                    <td><?= $order['order_name'] ?></td>
                    <td><?= $order['order_price'] ?></td>
                    <td><?= $order['order_amount'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>

