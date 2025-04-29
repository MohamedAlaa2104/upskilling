<?php

require_once 'db.php';

// $sql = "
// SELECT * 
// FROM users 
// WHERE address = 'Cairo' AND (name = 'ahmed' OR name = 'mohamed')
// ORDER BY created_at DESC, name ASC
// ";
// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo json_encode($users);

// $sql = "
// SELECT *
// FROM users 
// WHERE NOT name = 'ali'
// ";
// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo json_encode($users);


// $sql = "
// SELECT *
// FROM products 
// WHERE name IS NOT NULL AND price IS NULL
// ";


// $sql = "
// INSERT INTO products 
// (name, price)
// VALUES 
// ('Product name 1', 500.50),
// ('Product name 2', 100.50),
// ('Product name 3', 200.50),
// ('Product name 4', 300.50),
// ('Product name 5', 400.50),
// ('Product name 6', 500.50),
// ('Product name 7', 600.50),
// ('Product name 8', 700.50),
// ('Product name 9', 800.50),
// ('Product name 10', 900.50),
// ('Product name 11', 1000.50),
// ('Product name 12', 1100.50),
// ('Product name 13', 1200.50)
// ";

// $sql = "
// UPDATE products
// SET name = 'Null product name'
// WHERE name IS NULL
// ";

// $sql = "
// DELETE FROM products
// WHERE stock < 5
// ";

// $sql = "
// INSERT INTO products 
// VALUES 
// (55, 'Product name 1', 100.50, '2025-04-29 10:00:00')
// ";

// $stmt = $conn->prepare($sql);
// $stmt->execute();


// $sql = "
// SELECT *
// FROM products 
// WHERE price < 500
// ORDER BY id DESC
// LIMIT 5
// OFFSET 8
// ";

// $sql = "
// SELECT *
// FROM products 
// WHERE name LIKE '%na_e%'
// ORDER BY id DESC
// ";

// $sql = "
// SELECT id, name, price
// FROM products 
// WHERE id IN (SELECT id FROM products WHERE price > 500)
// ORDER BY id DESC
// ";

// $sql = "
// SELECT id, name, price
// FROM products 
// WHERE id NOT IN (40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50)
// ORDER BY id DESC
// ";

// $sql = "
// SELECT *
// FROM products 
// WHERE created_at BETWEEN '2025-04-10 00:00:00' AND '2025-04-14 23:59:59'
// ORDER BY id DESC
// ";

// $sql = "
// SELECT id AS product_id, name AS product_name, price AS product_price, CONCAT(name, ' - ', price) AS product_info
// FROM products AS P
// ORDER BY id DESC
// LIMIT 5
// ";

// $sql = "
// SELECT MIN(price) as min_price
// FROM products

// ";

// $sql = "
// SELECT MAX(price) as max_price
// FROM products

// ";

// $sql = "
// SELECT COUNT(id) as total_products
// FROM products

// ";

// $sql = "
// SELECT AVG(price) as avg_price
// FROM products
// ";

// $sql = "
// SELECT SUM(price * 2) as total_price
// FROM products
// ";

$sql = "
SELECT SUM(price) as total_price
FROM products
WHERE price < 500
";


$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($users);

