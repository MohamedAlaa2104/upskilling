<?php

// Autoload DB class using Composer
require_once __DIR__ . '/vendor/autoload.php';

use Ecom\Project\DB;

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "ecom";

try {
  $pdo = new PDO("mysql:host=$servername", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec("CREATE DATABASE IF NOT EXISTS $dbName");
  echo "Database '$dbName' created or already exists.<br>";

  $pdo->exec("USE $dbName");

  // Create users table
  $pdo->exec("CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        phone VARCHAR(20),
        password VARCHAR(255) NOT NULL,
        address VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

  // Create orders table
  $pdo->exec("CREATE TABLE IF NOT EXISTS orders (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        quantity INT,
        total_price DECIMAL(10,2),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
    )");

  // Insert sample orders
  $insertOrders = "INSERT INTO orders (user_id, quantity, total_price) VALUES
        (1, 2, 100.00),
        (2, 1, 50.00),
        (3, 4, 200.00),
        (1, 3, 150.00),
        (4, 2, 120.00),
        (2, 5, 300.00),
        (5, 1, 80.00),
        (3, 2, 90.00),
        (4, 3, 160.00),
        (5, 2, 110.00)";

  $pdo->exec($insertOrders);
  echo "Sample orders inserted successfully.<br>";

  // All orders with user info
  echo "<h3>All Orders with User Info:</h3>";
  $stmt = $pdo->query("SELECT orders.id AS order_id, users.name, users.email, orders.quantity, orders.total_price, orders.created_at
                         FROM orders
                         JOIN users ON users.id = orders.user_id");
  foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
    echo "Order #{$row['order_id']} - {$row['name']} ({$row['email']}): Quantity = {$row['quantity']}, Price = {$row['total_price']}<br>";
  }

  // Orders by price DESC
  echo "<h3>Orders Sorted by Price Descending:</h3>";
  $stmt = $pdo->query("SELECT * FROM orders ORDER BY total_price DESC");
  foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
    echo "Order #{$row['id']} - Price: {$row['total_price']}<br>";
  }

  // Orders by price ASC
  echo "<h3>Orders Sorted by Price Ascending:</h3>";
  $stmt = $pdo->query("SELECT * FROM orders ORDER BY total_price ASC");
  foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
    echo "Order #{$row['id']} - Price: {$row['total_price']}<br>";
  }

  // Total orders per user
  echo "<h3>Total Orders per User:</h3>";
  $stmt = $pdo->query("SELECT user_id, COUNT(*) AS total_orders FROM orders GROUP BY user_id");
  foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
    echo "User #{$row['user_id']} - Total Orders: {$row['total_orders']}<br>";
  }
} catch (PDOException $e) {
  die("Error: " . $e->getMessage());
}

// Close connection
$pdo = null;
