<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>Transactions Table</h2>

<table>
    <tr>
        <th>Date</th>
        <th>Check</th>
        <th>Description</th>
        <th>Amount</th>
    </tr>

    <?php foreach ($transactions as $transaction): ?>

    <tr>
        <td> <?= $transaction[0]; ?> </td>
        <td><?= $transaction[1]; ?></td>
        <td><?= $transaction[2]; ?></td>
        <td><?= $transaction[3]; ?></td>
    </tr>

    <?php endforeach; ?>

</table>

</body>
</html>

