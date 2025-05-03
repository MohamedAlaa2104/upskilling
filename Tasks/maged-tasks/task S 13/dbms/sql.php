<?php
require_once 'db.php'; 
 require_once 'generate_products.php';

// $sql =" CREATE TABLE IF NOT EXISTS products (
// id INT AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(255) ,
// description TEXT ,
// price DECIMAL(10,2) ,
// stock INT ,
// category VARCHAR(100) ,
// created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";

// $sql ="INSERT INTO products (name,description,price ,stock ,category)
// VALUES 
// ('Product 1','Description 1',10.00,100,'Category 1')
// ";







// $sql ="DELETE FROM products ";

// $sql = "TRUNCATE TABLE products";





// insertData();


// $sql ="CREATE TABLE categories (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(100) UNIQUE
// )";
// $sql ="INSERT INTO categories (name) VALUES 
// ('Electronics'), ('Clothing'), ('Home Goods'), ('Books'), ('Toys')";

$sql ="SELECT * FROM products 
WHERE name LIKE '%product%' LIMIT 10 ";
 $stmt = $conn->prepare($sql);
 $stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);







?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    


  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">price</th>
      <th scope="col">stock</th>
      <th scope="col">category</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($products as $product): ?>
    <tr>
      <th scope="row"><?php echo $product['id']; ?></th>
      <td><?php echo $product['name']; ?></td>
      <td><?php echo $product['description']; ?></td>
        <td><?php echo $product['price']; ?></td>   
        <td><?php echo $product['stock']; ?></td>
        <td><?php echo $product['category']; ?></td>

      
</tr>
<?php endforeach; ?>
   
    
  </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>