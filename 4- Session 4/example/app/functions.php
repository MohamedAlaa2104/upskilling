<?php

function printPrettyArray($array): void
{
    echo '<pre>';

    print_r($array);

    echo '</pre>';
}

function getDataFromFile(string $filePath): array {
    $transactions = [];

    if(file_exists($filePath)){
        $fileSteam = fopen($filePath, 'r');

        while(($line = fgetcsv($fileSteam, escape: '\\')) !== false){
            $transactions[] = $line;
        }
    }
    return $transactions;
}