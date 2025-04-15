 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom";
try {
   
    $pdo = new PDO("mysql:host=$servername", $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $pdo->exec($sql);
    $pdo->exec("USE $dbname");

    $table =" CREATE TABLE IF NOT EXISTS Users(
    id INT   AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL ,
    email VARCHAR(30) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $pdo->exec($table);
//     $insertusers = "INSERT INTO Users (name, email, password, address) VALUES
//    ('maged', 'maged@gmail.com', '12345678', 'assuit'),
//     ('ahmed', 'ahmed@gmail.com', '0215484', 'cairo')";
// $pdo->exec($insertusers);

    $orderstable =" CREATE TABLE IF NOT EXISTS Orders(
    id INT   AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL ,
    quantity INT NOT NULL,
    total_price  DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
    )";
    $pdo->exec($orderstable);
    // $pdo->exec("TRUNCATE TABLE orders");
    
//     $insertorders = "INSERT INTO orders (user_id, quantity, total_price) VALUES
//     (1, 2, 100.00),
//     (2, 1, 50.00),
//     (1, 2, 300.00),
//     (2, 1, 400.00),
//     (1, 2, 500.00),
//     (2, 1, 600.00),
//     (1, 2, 700.00),
//     (2, 1, 800.00),
//     (1, 2, 900.00),
//     (2, 1, 10.00)";
// $pdo->exec($insertorders);
// SELECT * FROM orders WHERE user_id =1;
// SELECT * FROM orders WHERE user_id = 1;
// $orderuser1 ="SELECT * FROM Orders WHERE user_id = 1";
// $pdo->exec($orderuser1);
// echo $orderuser1;




$stmt = $pdo->prepare("SELECT * FROM orders WHERE user_id = ?");
$user_id = 1 ; 
$stmt->execute([$user_id]);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);


// foreach ($orders as $order) {
//     foreach ($order as $key => $value) {
//         echo "$key: $value <br>";
//     }
//     echo "<hr>"; 
// }



















    
    echo "Database '$dbname' created successfully!";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>




