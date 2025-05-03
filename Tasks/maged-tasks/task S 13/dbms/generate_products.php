<?php
require_once 'db.php'; 

 
    
      
ini_set('max_execution_time', 600); // 10 دقائق

    
function insertData()  {
       $categories = ['Electronics', 'Clothing', 'Home', 'Goods', 'Books', 'Toys'];
    global $conn;
    global $products;
    $stmt = $conn->prepare("INSERT INTO products (name,description,price ,stock ,category)
    VALUES (?,?,?,?,?)");
    // $stmt = $conn->execute($name,$description,$price,$stock,$category);
    for ($i=1; $i <= 100000; $i++) {
        $name = "Product $i";
        $description = "Description $i";
        $price = rand(10, 2000) + rand(0, 99) / 100;
        $stock = rand(0, 1000);
        $categoryIndex = array_rand($categories); // احصل على المفتاح
        $category = $categories[$categoryIndex]; // احصل على القيمة
        $stmt->execute([$name,$description,$price,$stock,$category]);
    }
    echo "Data inserted successfully!";
    //  $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
  

    
}