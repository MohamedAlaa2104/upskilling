<?php

// queries
// 1. SELECT * FROM `products` WHERE category = 'abc' AND price < 100 ORDER BY created_at ASC;
// 2. SELECT * FROM `products` WHERE description IS NULL ORDER BY created_at ASC;
// 3. SELECT * FROM `products` WHERE NOT category = "abc" ORDER BY created_at ASC;
// 4. UPDATE products SET name = CONCAT("out of stock - ", name) WHERE stock = 0;
// 5. DELETE FROM products WHERE created_at < "2023-12-15 22:05:48" AND (stock < 10 AND stock > 5);