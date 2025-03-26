<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .red {
            color: red;
        }

        .green {
            color: green;
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
                <td> <?= $transaction["Date"]; ?> </td>
                <td><?= $transaction["Check #"]; ?></td>
                <td><?= $transaction["Description"]; ?></td>
                <td class="<?= $transaction["Amount"] > 0 ? 'green' : 'red'; ?>">
                    <?= $transaction["Amount"]; ?>
                </td>
            </tr>

        <?php endforeach; ?>
        <tr>
            <td>Sum Total value</td>
            <td colspan="3"> <?= $total; ?> </td>
        </tr>
        <tr>
            <td>Income total</td>
            <td colspan="3"> <?= $totalIncome; ?>$ </td>
        </tr>
        <tr>
            <td>Expenses total</td>
            <td colspan="3"> <?= abs($totalExpenses) ?>$ </td>
        </tr>

    </table>

</body>

</html>