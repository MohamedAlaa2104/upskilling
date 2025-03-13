<?php

//Loops

//While Loop
//$x = 1;
//
//while($x <= 10){
//    echo "$x </br>";
////    $x = $x + 1;
////    $x += 1;
//    $x++;
//}

//Do While Loop
//$x = 1;
//do{
//    echo "$x </br>";
//    $x++;
//}while($x <= 10);


//For Loop

//for($x=1; $x <= 10; $x++){
//    //Code to run
//    echo "$x </br>";
//}


//Foreach Loop

//$number = [1,2,3,4,10];
//$index = 1;
//foreach($number as $value){
//    $number[$index] = $value + 1;
//    $index++;
//}
//
//print_r($number);

//$array = [
//    'name'     => 'Ahmed',
//    'age'      => 20,
//    'location' => 'Cairo',
//];
//
//foreach ($array as $key => $value) {
//    echo "$key  => $value </br>";
//}


//$array = [
//    'name'     => 'Ahmed',
//    'age'      => 20,
//    'location' => 'Cairo',
//    'hobbies'  => ['playing', 'coding', 'sleeping'],
//];
//
//foreach ($array as $key => $value) {
//    //if condition
//    if (is_array($value)){
//        //array
////        echo "$key => " . json_encode($value) . "</br>";
////        echo "$key => " . implode(', ', $value) . "</br>";
//
//        $text = "$key => ";
//
//        foreach($value as $row){
////            $text = $text . " $row ";
//            $text .= " $row ";
//        }
//
//        echo $text;
//
//    }else{
//        // text
//        echo "$key  => $value </br>";
//    }
//
//}


//$products = [
//    'product1' => [
//        'name' => 'Product 1',
//        'price' => 100,
//    ],
//    'product2' => [
//        'name' => 'Product 2',
//        'price' => 200,
//    ]
//];
//
//
//$productsWithDiscount = [
//
//];
//
//
//
//foreach ($products as $productName => $productData) {
//
//    //Condition to validate product price
//
//    if($productData['price'] > 150){
////        $productsWithDiscount[$productName] = [
////            'name' => $productData['name'],
////            'price' => $productData['price'] - 50
////        ];
//
//        //Update price
//        $productData['price'] = $productData['price'] - 50;
//
//
//        //Push product
//        $productsWithDiscount[$productName] = $productData;
//    }
//
//}
//
//
//print_r($productsWithDiscount);

//$products = [
//    'product1' => [
//        'name' => 'Product 1',
//        'price' => 100,
//    ],
//    'product2' => [
//        'name' => 'Product 2',
//        'price' => 200,
//    ]
//];
//
//
//$productsWithDiscount = [
//
//];
//
//
//
//foreach ($products as $productName => $productData) {
//
//    if ($productData['price'] > 150){
//        continue;
//    }
//
//    //Update price
//    $productData['price'] = $productData['price'] - 50;
//
//
//    //Push product
//    $productsWithDiscount[$productName] = $productData;
//
//
//}
//
//
//print_r($productsWithDiscount);

//$arrayOfFruits = ['apple', 'orange', 'banana', 'grape', 'kiwi', 'mango', 'watermelon'];
//
//function numberOfFruits(){
//    sleep(3);
//
//    return 6;
//}
//
//$numberOfFruits = numberOfFruits();
//
//for($initialValue = 0; $initialValue <= $numberOfFruits ; $initialValue++){
//    echo "$arrayOfFruits[$initialValue] </br>";
//}


//Write php script using a loop to print number from 10 to 1

//Initial value = 10
//$initialValue = 10;

//Select Loop

//Condition inside loop

//Decrement 1

//for($initialValue; $initialValue >= 1; $initialValue--){
//    echo "$initialValue </br>";
//}

//while($initialValue>=1){
//    echo "$initialValue </br>";
//    $initialValue--;
//}


//do{
//    echo "$initialValue </br>";
//    $initialValue--;
//}while($initialValue >= 1);
//$fruit = 'aaaa';
//
//$arrayOfFruits = ['apple', 'orange', 'banana', 'grape', 'kiwi', 'mango', 'watermelon'];
//
//foreach ($arrayOfFruits as $fruit) {
//    echo "$fruit </br>";
//}
//
//echo $fruit;
//var_dump(1 === '1');
//$var = '1';
//
//switch ($var){
//    case 1:
//    case 2:
//        echo "One or two </br>";
//        break;
//    case 3:
//        echo "Three </br>";
//        break;
//    default:
//        echo "Default Value </br>";
//}


//$value = 'Espresso';
//
//switch ($value){
//    case 'Espresso':
//    case 'Latte':
//        echo "Espresso and Latte </br>";
//        break;
//    case 'Cappuccino':
//        echo "Cappuccino </br>";
//        break;
//    default:
//        echo "Not available </br>";
//}

//$array = ['A', 'B', 'C'];
//
//foreach ($array as $value) {
//    switch ($value){
//        case 'Cash':
//            echo "Cash </br>";
//            break;
//        case 'Debit Card':
//            echo "Debit Card </br>";
//            break;
//        case 'Credit Card':
//            echo "Credit Card </br>";
//            break;
//        default:
//            echo "Not available </br>";
//    }
//}

//foreach ($array as $value) {
//    foreach ($array as $value2) {
//        if ($value2 == 'B'){
//            break 2;
//        }
//        echo "$value $value2 </br>";
//    }
//}

//$value = 1;
//
//switch ($value) {
//    case 1:
//    case 2:
//        echo "Debit Card </br>";
//        break;
//    case 3:
//        echo "Credit Card </br>";
//        break;
//    default:
//        echo "Not available </br>";
//}
//
//$res = match ($value) {
//    1, 2 => "Cash </br>",
//    3 => "Credit Card </br>",
//    default => "Not available </br>",
//};
//
//echo $res;


//include './folder/foo.php';
//require './folder/foo.php';

//include_once './folder/foo.php';
//include_once './folder/foo.php';

//require_once './folder/foo.php';
//require_once './folder/foo.php';


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<header>
    <?php
    require_once './folder/header.php';
    ?>
</header>
</body>
</html>
