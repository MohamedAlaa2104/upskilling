<?php

include 'db.php';

// $sql = "SELECT * FROM products";
// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo json_encode($products);


// $sql = "CREATE TABLE orders (
//     id INT PRIMARY KEY AUTO_INCREMENT,
//     user_id INT NOT NULL,
//     total_amount DECIMAL(10,2) NOT NULL,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//     FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
// )";

// try {
//     $conn->exec($sql);
//     echo "Orders table created successfully";
// } catch(PDOException $e) {
//     echo "Error creating orders table: " . $e->getMessage();
// }


// $sql = "INSERT INTO orders (user_id, total_amount) VALUES (20, 300)";
// $stmt = $conn->prepare($sql);
// $stmt->execute();
// echo "Order created successfully";


// $sql = "
//     SELECT 
//         u.id,
//         u.name,
//         u.email,
//         u.created_at AS user_created_at,
//         o.id AS order_id,
//         o.total_amount,
//         o.created_at AS order_created_at,
//         o.updated_at AS order_updated_at
//     FROM users AS u
//     INNER JOIN orders AS o ON u.id = o.user_id
// ";
// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo json_encode($users);

// $sql = "
//     CREATE TABLE employees (
//         id INT PRIMARY KEY AUTO_INCREMENT,
//         name VARCHAR(255) NOT NULL,
//         email VARCHAR(255) NOT NULL,
//         phone VARCHAR(255) NOT NULL,
//         address VARCHAR(255) NOT NULL,
//         salary DECIMAL(10,2) NOT NULL,
//         manager_id INT,
//         FOREIGN KEY (manager_id) REFERENCES employees(id)
//     )
// ";

// try {
//     $conn->exec($sql);
//     echo "Employees table created successfully";
// } catch(PDOException $e) {
//     echo "Error creating employees table: " . $e->getMessage();
// }


// $sql = "
//     INSERT INTO employees (name, email, phone, address, salary, manager_id) VALUES 
//     ('John Doe', 'john@example.com', '1234567890', '123 Main St, Anytown, USA', 50000, NULL),
//     ('Jane Smith', 'jane@example.com', '0987654321', '456 Maple Ave, Anytown, USA', 55000, 1),
//     ('Jim Beam', 'jim@example.com', '1122334455', '789 Oak St, Anytown, USA', 60000, 1),
//     ('Jill Johnson', 'jill@example.com', '6677889900', '321 Pine St, Anytown, USA', 52000, 2),
//     ('Jack Daniels', 'jack@example.com', '5566778899', '654 Cedar St, Anytown, USA', 58000, 2),
//     ('John Doe', 'john@example.com', '1234567890', '123 Main St, Anytown, USA', 50000, NULL),
//     ('Jane Smith', 'jane@example.com', '0987654321', '456 Maple Ave, Anytown, USA', 55000, 1),
//     ('Jim Beam', 'jim@example.com', '1122334455', '789 Oak St, Anytown, USA', 60000, NULL),
//     ('Jill Johnson', 'jill@example.com', '6677889900', '321 Pine St, Anytown, USA', 52000, 6),
//     ('Jack Daniels', 'jack@example.com', '5566778899', '654 Cedar St, Anytown, USA', 58000, NULL)
// ";

// $stmt = $conn->prepare($sql);
// $stmt->execute();
// echo "Employees created successfully";


// $sql = "
//     SELECT
//         e.id AS employee_id,
//         e.name AS employee_name,
//         m.name AS manager_name
//     FROM employees AS e
//     RIGHT JOIN employees AS m 
//     ON e.manager_id = m.id
//     ORDER BY manager_name DESC
// ";

// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo json_encode($employees);



