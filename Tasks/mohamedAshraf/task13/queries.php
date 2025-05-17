<?php

// queries
// 1. SELECT * FROM `products` WHERE category = 'abc' AND price < 100 ORDER BY created_at ASC;
// 2. SELECT * FROM `products` WHERE description IS NULL ORDER BY created_at ASC;
// 3. SELECT * FROM `products` WHERE NOT category = "abc" ORDER BY created_at ASC;
// 4. UPDATE products SET name = CONCAT("out of stock - ", name) WHERE stock = 0;
// 5. DELETE FROM products WHERE created_at < "2023-12-15 22:05:48" AND (stock < 10 AND stock > 5);
// 6. SELECT * from products ORDER BY price DESC limit 10;
// 7. SELECT * from products ORDER BY price DESC limit 10 OFFSET 50;
// 8. SELECT * from products WHERE category LIKE "%s";
// 9. SELECT * from products WHERE id IN (1000, 1500);
// 10. SELECT * from products WHERE stock BETWEEN 10 AND 15;
// 11. SELECT * from products WHERE created_at BETWEEN "2023-05-03" AND "2025-05-03";
// 12. SELECT name as "product name", p.description from products as p WHERE p.created_at BETWEEN "2023-05-03" AND "2025-05-03";
// 13. 
// a. SELECT MIN(price) FROM products;
// b. SELECT MAX(price) FROM products;
// c. SELECT AVG(price) FROM products;
// d. SELECT COUNT(price) FROM products;
// e. SELECT SUM(stock) FROM products;
// 14. SELECT SUM(price) FROM products WHERE category LIKE "TVs";
// 15. SELECT * FROM products WHERE price >=(SELECT AVG(price) from products);
