<?php

// Read data from excel file

// Store transactions in an array

// Using loop to print transactions in html table

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

const APP_PATH = ROOT . 'app' . DIRECTORY_SEPARATOR;
const DATA_PATH = ROOT . 'data' . DIRECTORY_SEPARATOR;
const VIEWS_PATH = ROOT . 'views' . DIRECTORY_SEPARATOR;

include_once APP_PATH . 'functions.php';

$scanDataDirectory = scandir(DATA_PATH);

$transactions = [];

foreach ($scanDataDirectory as $file) {
    if (is_dir($file)) {
        continue;
    }

    $transactions = array_merge($transactions, getDataFromFile(DATA_PATH . $file));
}

$total = 0;
$totalIncome = 0;
$totalExpenses = 0;
foreach ($transactions as &$value) {
    $value['Date'] = date("d , M, Y", strtotime($value["Date"]));
    $value['Amount'] = (float) removeDollarFromStr($value["Amount"]);

    $total += $value["Amount"];

    if ($value["Amount"] > 0) {
        $totalIncome += $value["Amount"];
    } else {
        $totalExpenses += $value["Amount"];

    }

}

unset($value);

include_once VIEWS_PATH . 'transactions-table.php';

