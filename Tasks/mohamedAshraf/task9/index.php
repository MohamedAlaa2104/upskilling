<?php

use MohamedAshraf\Task9\Db;


require_once "vendor/autoload.php";



$db = Db::CreateTable("users");

echo "<br/>";

// $q1 = $db->select()->execute();
// var_dump($q1);

echo "<br/>";

$query = [
    'name' => 'tarek',
    'email' => 'tarek@tarek.com',
    'phone' => 'tarek',
    'password' => 'tarek',
    'address' => 'tarek'
];

// $db->insert($query)->execute();
$db->update($query, 2)->execute();
$db->delete(2)->execute();
echo "<br/>";
// var_dump($db->select()->execute());
echo "<br/>";

var_dump($_POST);

$db2 = Db::CreateTable("orders");

$query2 = array(
    "user_id" => 3,
    "quantity" => 1,
    "total_price" => 50
);

$bulkInsert = array(
    $query2
);


foreach ($bulkInsert as $values) {
    $db2->insert($values)->execute();

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        form label {
            display: block;
            margin-bottom: 15px;
            font-weight: bold;
            color: #333;
        }

        form input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 15px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <form action="submit.php" method="POST">
        <label>
            Name*
            <input type="text" name="name" required>
        </label>

        <label>
            Email*
            <input type="email" name="email" required>
        </label>

        <label>
            Phone
            <input type="text" name="phone">
        </label>

        <label>
            Password*
            <input type="password" name="password" required>
        </label>

        <label>
            Address
            <input type="text" name="address">
        </label>

        <button type="submit">Add User</button>
    </form>

</body>

</html>