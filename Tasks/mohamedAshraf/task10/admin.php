<?php

require_once('./vendor/autoload.php');
use MohamedAshraf\Task10\Db;


session_start();

$allUsers = Db::CreateTable("users")->select()->execute();

print_r($allUsers);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Users List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }

        .user-card {
            background: white;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .user-card h2 {
            margin: 0 0 10px;
            font-size: 20px;
            color: #333;
        }

        .user-card p {
            margin: 5px 0;
            color: #666;
        }

        .admin-badge {
            display: inline-block;
            background: #4CAF50;
            color: white;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 12px;
            margin-left: 10px;
        }

        .inactive {
            color: red;
        }

        .action-btn {
            margin-top: 10px;
            padding: 8px 12px;
            background: #007BFF;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }

        .action-btn:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Users List</h1>

    <?php foreach ($allUsers as $user): ?>
        <div class="user-card">
            <h2>
                <?= htmlspecialchars($user['name']) ?>
                <?php if ($user['is_admin']): ?>
                    <span class="admin-badge">Admin</span>
                <?php endif; ?>
            </h2>
            <p><strong>Username:</strong> <?= htmlspecialchars($user['username']) ?></p>
            <p><strong>Address:</strong> <?= htmlspecialchars($user['address']) ?></p>
            <p><strong>Status:</strong>
                <?php if ($user['is_active']): ?>
                    Active
                <?php else: ?>
                    <span class="inactive">Inactive</span>
                <?php endif; ?>
            </p>

            <form method="POST" action="change-status.php" style="margin-top: 10px;">
                <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                <input type="hidden" name="current_status" value="<?= $user['is_active'] ?>">
                <button class="action-btn" type="submit" name="toggle_user">
                    <?= $user['is_active'] ? 'Deactivate' : 'Activate' ?>
                </button>
            </form>
        </div>
    <?php endforeach; ?>

</body>

</html>
<?php

?>