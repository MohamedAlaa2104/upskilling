<?php

$products = [];

// function to add product
function addProduct($name, $price, $quantity, $colors = [])
{
    global $products;
    $products[] = [
        'name' => $name,
        'price' => $price,
        'quantity' => $quantity,
        'colors' => $colors
    ];
    return $products;
}
//function to dispaly product
function displayproduct()
{
    global $products;
    foreach ($products as $product) {
        echo 'Product Name: ' . $product['name'] . '<br>';
        echo 'Product Price: ' . $product['price'] . '<br>';
        echo 'Product Quantity: ' . $product['quantity'] . '<br>';
        echo 'Product Colors: ' . implode(", ", $product['colors']) . '<br><br>';
    }
}


//update product
function updateProduct($index, $name, $price, $quantity, $colors = [])
{
    global $products;
    if (isset($products[$index])) {
        $products[$index]['name'] = $name;
        $products[$index]['price'] = $price;
        $products[$index]['quantity'] = $quantity;
        $products[$index]['colors'] = $colors;
    }
}

//delete product
function deleteProduct($index)
{
    global $products;
    if (isset($products[$index])) {
        unset($products[$index]);
    }
}

//total inventory value 
function totalInventory()
{
    global $products;
    foreach ($products as $product) {
        $totalValue = $product['price'] * $product['quantity'];
        echo " product: <b>{$product['name']}</b> - Product Quantity: <b>{$totalValue}</b> .'<br>'";
    }
}



addProduct('test', 200, 900, ["white", "red"]);
addProduct('test2', 200, 900, ["white", "red"]);
addProduct('testdelete', 200, 900, ["white", "red"]);


updateProduct(0, 'testupdate', 400, 10, ['white', 'blue']);


deleteProduct(1);
totalInventory();
var_dump($products);
