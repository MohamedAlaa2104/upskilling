<?php

function getRandomCategory()
{
    $categories = ["abc", "phones", "care", "TVs"];
    return $categories[rand(0, count($categories) - 1)];
}

function getRandomNumber()
{
    return rand(1, 100); // If you want decimal, use mt_rand()/10
}

function getRandomDate()
{
    $timestamp = rand(strtotime('-2 years'), time());
    return date('Y-m-d H:i:s', $timestamp);
}


function bulkInsertFunction()
{

    $bulkQuery = "INSERT INTO products (name, description, price, stock, category, created_at) VALUES\n";
    $values = [];

    for ($i = 0; $i < 11000; $i++) {
        $name = "product$i";
        $description = "description for product $i";
        $price = $i * getRandomNumber();
        $stock = getRandomNumber();
        $category = getRandomCategory();
        $createdAt = getRandomDate();


        $values[] = "('$name', '$description', $price, $stock, '$category', '$createdAt')";
    }

    $bulkQuery .= implode(",\n", $values) . ";";

    return $bulkQuery;
}