<?php


//declare array
$products = [
    ['name' => 'Laptop', 'price' => 300],
    ['name' => 'Mouse', 'price' => 50],
    ['name' => 'Keyboard', 'price' => 100],
    ['name' => 'Headphones', 'price' => 80],
];




//add to cart
function addtoCart($products)
{
    $cart = [];
    $totalAfterDiscount = 0;
    $totalBeforeDiscount = array_sum(array_column($products, 'price'));
    $cartAfterDiscount = [];

    //add product to cart
    foreach ($products as $product) {
        $cart[] = $product;
    }
    //calculate  discount
    $discount = 0;
    //Condition to validate product price
    if ($totalBeforeDiscount > 500) {
        $discount = 10;
    } elseif ($totalBeforeDiscount >= 200) {
        $discount = 5;
    } else {
        $discount = 0;
    }

    //display cart after discount
    foreach ($products as $product) {
        $discountAmount = ($product['price'] * $discount) / 100;
        $product['price'] -= $discountAmount;
        $cartAfterDiscount[] = $product;
    }
    print_r($cartAfterDiscount);

    //calculate discount amount
    $discountAmount = ($totalBeforeDiscount * $discount) / 100;


    $totalAfterDiscount = $totalBeforeDiscount - $discountAmount;

    echo "Total Before Discount: $" . $totalBeforeDiscount . "<br>";
    echo "Discount Applied: " . $discount . "%<br>";
    echo "Total After Discount: $" . $totalAfterDiscount . "<br>";


    return $cart;
}






$cart = addToCart($products = [
    ['name' => 'Laptop', 'price' => 300],
    ['name' => 'Mouse', 'price' => 50],
    ['name' => 'Keyboard', 'price' => 100],
    ['name' => 'Headphones', 'price' => 80],
]);


print_r($cart);