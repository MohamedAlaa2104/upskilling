<?php
function printPrettyArray($array): void
{
    echo '<pre>';

    print_r($array);

    echo '</pre>';
}
// Task 1: Function Practice
// Write a function multiply that accepts two numbers as parameters and returns their product.
// Write a function divide that accepts two numbers and returns the result of division (handle division by zero)

function multiply(int $firstNumber, int $secondNumber)
{
    return $firstNumber * $secondNumber;
}

echo multiply(2, 3) . "</br>";

$divide = function (int $firstNumber, int $secondNumber): float {
    if ($secondNumber === 0) {
        throw new Exception("Second number can't be Zero");
    }
    return $firstNumber / $secondNumber;
};

echo $divide(3, 1) . "</br>";

// Task 2: Array Manipulation
// Create an array of numbers [10, 20, 30, 40, 50].
// Use array_map() to multiply each number by 2.
// Use array_filter() to get numbers greater than 30.
// Use array_reduce() to calculate the sum of the array.
// Search for 30 in the array using array_search(), and replace it with 300.

$numbersArray = [10, 20, 30, 40, 50];
$modifiedArray = array_map(fn($number) => $number * 2, $numbersArray);
printPrettyArray($modifiedArray);

$modifiedArray = array_filter($numbersArray, fn($number) => $number > 30);
printPrettyArray($modifiedArray);

$modifiedArray = array_reduce($numbersArray, fn($carry, $number) => $carry + $number);
printPrettyArray($modifiedArray);

$searchedItemIndex = array_search(30, $numbersArray);
$numbersArray[$searchedItemIndex] = 300;
printPrettyArray($numbersArray);

// Task 3: Anonymous Functions & Callbacks
// Create an anonymous function that takes a number and returns its square.
// Use this function inside array_map() on an array [2, 4, 6, 8].
// Create another anonymous function inside array_reduce() to find the product of all numbers in an array.
printPrettyArray(array_map(
    function ($number) {
        return $number * $number;
    }
    ,
    [2, 4, 6, 8]
));
printPrettyArray(array_reduce([2, 4, 6, 8], fn($acc, $number) => $acc * $number, 1));


// Task 4: Using Static Variables
// Write a function counter() that uses a static variable to count the number of times it has been called.
// Call it multiple times and print the result.
function counter()
{
    static $counter = 0;
    $counter++;
    return $counter;
}

echo counter();
echo counter();
echo counter();
echo counter();


// Task 5: Working with Dates & Time
// Display the current timestamp using time().
echo time() . "</br>";
// Change the timezone to "" and display the current time.
date_default_timezone_set('America/New_York');
$date = new DateTime('now');
echo $date->format("d-m-Y") . "</br>";
// Calculate and display the date that is 10 days from now.
echo date("d - m - Y", strtotime("+10 days")) . "</br>";
// Convert "2024-05-10 12:00" into a timestamp using strtotime() and display it in "Y-m-d H:i:s" format.
echo date("Y-m-d H:i:s", strtotime("2024-05-10 12:00")) . "</br>";

// Task 6: Using Built-in Functions
$array1 = ["apple", "banana", "cherry"];
$array2 = [100, 200, 300];

// Combine them using array_combine().
printPrettyArray(array_combine($array1, $array2));
// Merge two different arrays using array_merge().
printPrettyArray(array_merge($array1, $array2));
// Find the difference between two number arrays using array_diff().
printPrettyArray(array_diff([1, 2, 3, 5], [2, 3, 4]));
// Extract keys and values from an associative array using array_keys() and array_values().
$assocArr = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];
printPrettyArray(array_keys($assocArr));
printPrettyArray(array_values($assocArr));


// Task 7: Using Closures & Arrow Functions
// Write an arrow function that takes a number and returns the number squared.
// Use this function inside array_map() with an array [1, 2, 3, 4].
// Create a function that takes a callback and an array, then applies the callback to each element.
printPrettyArray(array_map(fn($number) => $number * $number, [1, 2, 3, 4]));

function funtionTakesCallback(callable $callback, array $array)
{
    return array_map($callback, $array);
}

function square($number)
{
    return $number * $number;
}

printPrettyArray(funtionTakesCallback('square', [1, 2, 3, 4]));

// Task 8: Expense Tracker
// You are developing a simple expense tracker for personal use. You need to create a PHP script that allows a user to store, 
// calculate, and analyze expenses.

// Requirements:
// Users should be able to add expenses with:

// A description (e.g., "Groceries", "Rent", "Electricity Bill").
// An amount.
// A date of the expense.
// Perform the following operations:
echo "Expenses Tracker </br>";
// Store expenses in an array.
$expensesArray = [
    [
        'desc' => 'groceries',
        'amount' => 200,
        'date' => "15,7,2024",

    ],
    [
        'desc' => 'groceries',
        'amount' => 4000,
        'date' => "15,7,2024",

    ],
    [
        'desc' => 'groceries',
        'amount' => 20,
        'date' => "15,7,2024",

    ],
];
// Calculate the total amount spent using array_reduce().
function calculateToatalAmountSpent($expensesArray)
{
    return array_reduce($expensesArray, fn($acc, $item) => $acc + $item['amount']);
}

echo "Total expenses: " . calculateToatalAmountSpent($expensesArray) . "</br>";
// Find all expenses greater than a specific amount using array_filter().

function findExpense(array $expensesArray, int $numberToFind)
{
    return array_filter($expensesArray, fn($item) => $item["amount"] > $numberToFind);
}

$greaterThan = 30;
echo "Expenses Greater than $greaterThan ";
printPrettyArray(findExpense($expensesArray, $greaterThan)) . "</br>";
// Sort expenses by amount (highest to lowest) using usort().
usort($expensesArray, fn($a, $b) => $a['amount'] <=> $b['amount']);
printPrettyArray($expensesArray);

// Find the most expensive and least expensive item using max() and min().
$mostExpensive = max(array_column($expensesArray, "amount"));
$leastExpensive = min(array_column($expensesArray, "amount"));
printPrettyArray(array_filter($expensesArray, fn($item) => $item["amount"] === $mostExpensive));
printPrettyArray(array_filter($expensesArray, fn($item) => $item["amount"] === $leastExpensive));
// Format the expenses in a readable format using number_format() for currency.
printPrettyArray(array_map(fn($item) => number_format($item["amount"], 0, ","), $expensesArray));
// Find expenses in a given date range using strtotime() and array_filter().
