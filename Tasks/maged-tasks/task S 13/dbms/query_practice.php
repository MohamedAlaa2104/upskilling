<?php
require_once 'db.php'; 


//"SELECT * FROM products WHERE category ='Electronics'AND price < 100 ORDER BY created_at;" 7515 rows 2.586s.2.073s
//SELECT* FROM products WHERE description IS NULL; 0 row 2.156 s
//SELECT * FROM products WHERE NOT category='Toys'; 833754 rows 89.416s
//UPDATE products SET name = CONCAT('Out of Stock - ', name) WHERE stock = 0 AND name NOT LIKE 'Out of Stock -%';
//DELETE  FROM products WHERE stock < 10 AND created_at < '2025-05-02 17:20:17'; 93 rows effected 2.495s
//SELECT * FROM products ORDER BY price DESC LIMIT 10; 728ms
//SELECT * FROM products  WHERE id BETWEEN 51 AND 60 ORDER BY name; 10row 1 ms
//SELECT * FROM products WHERE name LIKE '%Gadget%'; 0 row 3.836 s
//SELECT * FROM products WHERE id IN(30,40,50,60,70,80,90,100); 7ROW 1MS
//SELECT * FROM products WHERE stock BETWEEN 10 AND 50 ; 41123 rows 4.528S
//SELECT * FROM products WHERE created_at BETWEEN '2025-05-02 17:19:17' AND '2025-05-02 17:25:17'; 124831 ROW 12.621 S
//SELECT p.name FROM products AS p; 999907 ROW 53.444S 
//SELECT MIN(price) FROM products; 1ROW 953 MS
//SELECT MAX(price) FROM products; 1ROW 919MS 
//SELECT AVG(price)FROM products; 1ROW 947MS
//SELECT COUNT(*) FROM products; 1ROW 725MS
//SELECT SUM(stock) FROM products; 1ROW 85MS
//SELECT SUM(price) FROM products WHERE category='Electronics';
//SELECT * FROM products WHERE price > (SELECT AVG(price)FROM products) ; 500367 ROW 55.695S
//CREATE INDEX idx_category ON products(category);
//CREATE INDEX idx_price ON products(price);
//CREATE INDEX idx_created_at ON products(created_at);
//EXPLAIN SELECT * FROM products WHERE category = 'Electronics' AND price < 500 ORDER BY created_at DESC;










