<?php


// $servername = "localhost";
// $username = "root";
// $password = "";

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbName = "ecom";
// try {
//   $connection = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
//   // set the PDO error mode to exception
//   $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   //echo "Connected successfully $dbName" . "<br>";

//     // $statment = "INSERT INTO users (name, email, phone) VALUES ('John', 'john@example.com', '01010101010')";
//     $statment = "SELECT * FROM users";

//     $stmt = $connection->query($statment);

//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     var_dump($result);

//     foreach($result as $row) {
//         echo $row['name'] . "<br>";
//         echo $row['email'] . "<br>";
//         echo $row['phone'] . "<br>";
//     }

//     //echo "User created successfully" . "<br>";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "ecom";
try {
  $connection = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
  // set the PDO error mode to exception
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully $dbName" . "<br>";

    //  $statment = "INSERT INTO users (name, phone, email) VALUES ('John', '01010101010', 'john@example.com')";
    // $statment = "DELETE FROM users";

    // $statment = "DROP TABLE users";
    // $statment = "CREATE TABLE users (
    //     id INT AUTO_INCREMENT PRIMARY KEY,
    //     name VARCHAR(255),
    //     email VARCHAR(255),
    //     phone VARCHAR(255),
    //     password VARCHAR(255),
    //     address VARCHAR(255)
    // )";

    // $statment = "INSERT INTO users (name, phone, email, password, address) VALUES 
    //                             ('Mohamed', '01010101010', 'mohamed@example.com', '123456', '123 Main St')";

    // $statment = "TRUNCATE TABLE users";

    // $statment = "DROP TABLE users";


    // $statment = "CREATE TABLE orders (
    //     id INT AUTO_INCREMENT PRIMARY KEY,
    //     user_id INT,
    //     quantity INT,
    //     total_price DECIMAL(10, 2), 
    //     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    // )";

    // $statment = "INSERT INTO orders (user_id, quantity, total_price) VALUES (2, 1, 600)";
    
    // $stmt = $connection->exec($statment);

    $statment = "SELECT * FROM users";

    $stmt = $connection->query($statment);

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($result as $row) {
            echo "id: " . $row['id'] . " name: " . $row['name'] . " email: " . $row['email'] .
             " phone: " . $row['phone'] . " password: " . $row['password'] .
              " address: " . $row['address'] . "<br>";
        }

        echo "<br>";
        echo "Orders Table: <br>";
    $statment = "SELECT user_id, COUNT(*) as order_count, SUM(total_price) as total_spent 
                FROM orders 
                GROUP BY user_id";

    $stmt = $connection->query($statment);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $row) {
        echo "User ID: " . $row['user_id'] . 
             " | Orders: " . $row['order_count'] . 
             " | Total Spent: $" . $row['total_spent'] . "<br>";
    }
    

    //echo "User created successfully" . "<br>";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}