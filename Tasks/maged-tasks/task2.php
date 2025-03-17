<?php

  $cart = [
    ['name' => 'Laptop', 'price' => 300],
    ['name' => 'Mouse', 'price' => 50],
    ['name' => 'Keyboard', 'price' => 100],
    ['name' => 'Headphones', 'price' => 80],
];

foreach($cart as $product ){
    echo " - $product[name] :  $product[price] \$ <br>" ;
  
};
echo " ------------------------ </br>";

$total = array_sum(array_column($cart, 'price'));




$max_Discount = $total - ($total * .10);
$low_Discount = $total - ($total * .05);

if ($total > 500) {
echo "Total Before Discount: $total \$ </br>
Discount Applied: 10% </br>
Final Total: " . $max_Discount ."</br>";
    
}elseif ($total > 200 && $total <500) {
    echo "Total Before Discount: $total \$ </br>
    Discount Applied: 5% </br>
    Final Total: " . $low_Discount ."</br>";
        
}else {
    echo "Total Before Discount: $total \$ </br>
    there is no  Discount Applied </br> 
    Final Total: " . ($total ). "</br>";
};


echo " ------------------------ </br>";

switch($total){
    case $total > 500 :
        echo "Total Before Discount: $total \$ </br>
        Discount Applied: 10% </br>
        Final Total: " . $max_Discount ."</br>";
        break;
    case $total > 200  && $total <500 :
        echo "Total Before Discount: $total \$ </br>
    Discount Applied: 5% </br>
    Final Total: " . $low_Discount ."</br>";
        break;
    default:
        echo "Total Before Discount: $total \$ </br>
    there is no  Discount Applied </br> 
    Final Total: " . ($total ). "</br>";
};
echo " ------------------------ </br>";
//-----------------------
// حل اخر 
function PriceSum() {
    global $cart;  
    $total = 0; 
    
    foreach ($cart as $product) {
        $total += $product['price']; 
    }
    
    return $total;
}

$total_whit_fun = PriceSum();

echo "Total Price by function: " . PriceSum() ."</br>";