<?php

function printPrettyArray($array): void
{
    echo '<pre>';

    print_r($array);

    echo '</pre>';
}

function getDataFromFile(string $filePath): array
{
    $transactions = [];

    if (file_exists($filePath)) {
        $fileSteam = fopen($filePath, 'r');
        $header = fgetcsv($fileSteam);

        while (($row = fgetcsv($fileSteam, escape: '\\')) !== false) {
            $transactions[] = array_combine($header, $row);

        }

        fclose($fileSteam);
    }
    return $transactions;
}

function removeDollarFromStr($str)
{
    return str_replace("$", "", $str);
}

function calculateTotal($arr)
{
    static $total = 0;
    foreach ($arr as $value) {
        $total += $value;
    }

    return $total;
}