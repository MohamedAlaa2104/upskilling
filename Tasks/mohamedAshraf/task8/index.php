<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "ecom";


try {
    $connection = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Step 2: Create DB if it doesn't exist
    $sql = "CREATE DATABASE IF NOT EXISTS ecom";
    $connection->exec($sql);
    echo "DB created successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    throw $e;
}

try {

    $connection = new PDO("mysql:host={$servername};dbname={$dbName}", $username, $password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    throw $e;
}

// try {
//     $sql = "CREATE TABLE users(
//         id INT AUTO_INCREMENT PRIMARY KEY,
//         name VARCHAR(255),
//         email VARCHAR(255),
//         phone VARCHAR(255),
//         password VARCHAR(255),
//         address VARCHAR(255),
//         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//     )";

//     $connection->exec($sql);
// } catch (PDOException $e) {
//     echo "an error happened {$e} ";
// }

try {
    // $sql = "CREATE TABLE orders(
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     user_id  INT,
//     quantity INT,
//     total_price DECIMAL(10, 2),
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
// )";
//     $sql = "
//         INSERT INTO orders (user_id, quantity, total_price) VALUES
//         (1, 2, 100.00),
//         (2, 1, 50.00),
//         (3, 5, 250.00),
//         (1, 1, 40.00),
//         (4, 3, 120.00),
//         (2, 2, 99.99),
//         (3, 4, 180.00),
//         (5, 1, 60.00),
//         (4, 2, 110.00),
//         (5, 3, 135.50)
//     ";

    // $sql = "SELECT * FROM orders JOIN users ON users.id = orders.user_id ORDER BY orders.total_price DESC";
    // $sql = "SELECT * FROM orders JOIN users ON users.id = orders.user_id ORDER BY orders.total_price ASC ";
    $sql = "SELECT COUNT(*) FROM orders GROUP BY user_id";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
        <th>Order ID</th>
        <th>User Name</th>
        <th>Quantity</th>
        <th>Total Price</th>
        <th>Created At</th>
      </tr>";

    foreach ($results as $row) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['quantity']}</td>";
        echo "<td>{$row['total_price']}</td>";
        echo "<td>{$row['created_at']}</td>";
        echo "</tr>";
    }

    echo "</table>";


    // $connection->exec($sql);
} catch (PDOException $e) {
    echo "an error happened {$e} ";
}


$connection = null;