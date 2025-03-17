<?php

$products = [
    [
        "name" => "Iphone",
        "price" => 100
    ],
    [
        "name" => "TV",
        "price" => 500
    ],
    [
        "name" => "Smart Watch",
        "price" => 50
    ],
];

// Requirements:
//     You have an array of products, where each product has a name and a price.
//     If the total cart value exceeds 500, apply a 10% discount.
//     If the total cart value is between 200 and 500, apply a 5% discount.
//     If the total cart value is below 200, no discount is applied.
//     Use loops and conditional statements to process the cart.
//     Display:
//     Each item’s name and price.
//     The total before discount.
//     The applied discount percentage.
//     The final total after discount.

// Extra Challenge:
//     Try modifying the problem to allow different discount rules for specific products, such as:

//     Electronics (Laptop, Headphones) → 15% discount
//     Accessories (Mouse, Keyboard) → 5% discount


$cart = [
    ['name' => 'Laptop', 'price' => 300, 'category' => "Electronics"],
    ['name' => 'Mouse', 'price' => 50, 'category' => "Accessories"],
    ['name' => 'Keyboard', 'price' => 100, 'category' => "Accessories"],
    ['name' => 'Headphones', 'price' => 80, 'category' => "Electronics"],
];

function calculateTotal($cart)
{
    $total = 0;
    $discount = 0;
    $extraDiscount = 0;

    foreach ($cart as &$value) {
        $originalPrice = $value['price'];

        $value['price'] = match ($value['category']) {
            'Electronics' => $value['price'] - ($value['price'] * .15),
            'Accessories' => $value['price'] - ($value['price'] * .05),
            default => $value['price'],
        };

        $total += $value['price'];
        echo "{$value['name']} -> Original price: {$originalPrice} LE | Discounted price: {$value['price']} LE <br>";
    }
    unset($value);


    if ($total > 500) {
        $discount = 0.10;
    } elseif ($total >= 200) {
        $discount = 0.05;
    } else {
        $discount = 0;
    }

    $finalPrice = $total - ($total * $discount);
    print_r("Total before discount is:" . $total . "LE</br>");
    print_r("applied discount percentage is: " . $discount * 100 . "%</br>");
    print_r("Final Price: $finalPrice LE");
}


calculateTotal($cart);