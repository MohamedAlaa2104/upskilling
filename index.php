<?php

include_once './functions.php';


//const NAME = 'Ahmed';

//function sum(...$numbers): int
//{
//    return array_sum($numbers);
//}
//
//
//$array = [1,2,3];
//
//echo sum(...$array);

//setCookie(name: 'foo', value: 'bar', httponly: true );

//$y = 2;
// function someFun()
// {
//     global $y;
//     return $GLOBALS['y'];
// }
//
// echo someFun();

//function someFun()
//{
//    echo NAME;
//}
//
//someFun();


//function someExpensiveFunction()
//{
//    sleep(3);
//
//    echo 'done' . '<br>';
//
//    return 1;
//}
//
//
//
//function getData()
//{
//    static $value = null;
//
//    if ($value === null) {
//        $value = someExpensiveFunction();
//    }
//
//    return $value;
//}
//
//
//echo getData();
//echo getData();
//echo getData();
//echo getData();


//function sum(int $x, int $y)
//{
//    return $x + $y;
//}
//
//$someVariable = 'sum';
//
//if (is_callable($someVariable)){
//    echo $someVariable(4, 4);
//}

//$myVar = 20;
//
//
//$myFunction = function (int $x, int $y) use ($myVar)
//{
//    return $x + $y + $myVar;
//};
//
//echo $myFunction(4, 10);

//$array = [1, 2, 3, 4, 5];
//
//$callback = function ($value) {
//    return $value * 5;
//};
//
//
//$newArray = array_map(
//    $callback,
//    $array
//);

//$sum = function(callable $callback, int ...$numbers) {
//    return $callback(array_sum($numbers));
//};
//
//$myFunction = function ($value) {
//    return $value * 5;
//};
//
//
//echo $sum($myFunction, 5, 5);


//$callbackFunction = function ($value){
//    return $value + 5;
//};
//
//
//
//
//$sumAnyNumberOfVales = function (callable $callback, ...$numbers) {
//    return $callback(array_sum($numbers));
//};
//
//
//
//echo $sumAnyNumberOfVales($callbackFunction, 4,6,5);

//$y = 5;
//
//$myFunction = fn ($x) =>  $x + 5 + ++$y;
//
//echo $y . '<br>';
//echo $myFunction(5);


//$array = [1, 2, 3, 4, 5];
//
////$newArray = array_map( fn ($element) => $element * 2  , $array);
//
//$newArray = array_map(function ($element) {
//    return $element * 2;
//}, $array);
//
//printPrettyArray($newArray);

// Date & Time


//$myCurrentTime =  time();  // Equal current time
//
//echo $myCurrentTime . '<br>';
//
//echo date_default_timezone_get() . '<br>';
//date_default_timezone_set('Africa/Cairo') . '<br>';
//
//echo date('Y/m/d g:i a', $myCurrentTime + 5 *24 * 60 * 60) . '<br>';

//$myCurrentTime =  strtotime('2020-09-01 15:00');  // Equal current time
//$myCurrentTime =  strtotime('now');  // Equal current time
//$myCurrentTime =  strtotime('second friday of february');  // Equal current time
//
//echo $myCurrentTime . '<br>';
//
//echo date_default_timezone_get() . '<br>';
//date_default_timezone_set('Africa/Cairo') . '<br>';
//
//echo date('Y/m/d g:i a', $myCurrentTime ) . '<br>';


// Built-in Functions


//$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
//
//printPrettyArray(array_chunk($array, 3));

//
//$array1 = ['a', 'b', 'c'];
//$array2 = [1,2,3];
//
//printPrettyArray(array_combine($array1, $array2));


//$array = [1, 2, 3, 4, 5];
//
//printPrettyArray(array_map(fn ($num) => $num * 2, $array));

//$array = [1, 2, 3, 4, 5, false, [], 0.0, 6];
//
//printPrettyArray(
//    array_filter($array)
//);

//$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
//
//printPrettyArray(array_keys($array));
//printPrettyArray(array_values($array));

//$array1 = [1,2,3];
//$array2 = [4,5,6];
//$array3 = [7,8,9];
//
//printPrettyArray(array_merge($array1, $array2, $array3));

//$items = [
//    ['name' => 'Laptop', 'price' => 300],
//    ['name' => 'Mouse', 'price' => 50],
//    ['name' => 'Keyboard', 'price' => 100],
//    ['name' => 'Headphones', 'price' => 80],
//];
//
//$total = array_reduce($items, fn($initialValue, $item) => $initialValue + $item['price']);
//$total = array_reduce($items, fn($initialValue, $item) => $initialValue + $item['price'], 100);
//
//echo $total;

//$array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
//
//$key = array_search('a', $array);

// 0 == false
// 0 !== false

//if ($key === false) {
//    echo 'Not Found';
//}

//if (in_array('a', $array)) {
//    echo 'Found';
//}else {
//    echo 'Not Found';
//}

//$array[$key] = 'z';
//
//printPrettyArray($array);

//$array1 = [1,2,3, 4, 5];
//$array2 = [4,5,6];
//
//printPrettyArray(array_diff($array1, $array2));
//printPrettyArray(array_diff($array2, $array1));

//$array1 = ['a' => 1, 'e' => 9, 'c' => 3, 'f' => 6];
//$array2 = ['d' => 3, 'e' => 9, 'f' => 6, 'a' => 6];
//
//printPrettyArray(array_diff($array1, $array2));
//printPrettyArray(array_diff_key($array1, $array2));

//  //



























