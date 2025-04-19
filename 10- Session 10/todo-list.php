<?php
session_start();

include 'db.php';


if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit();
}


if(isset($_GET['completed'])){
    $stmt = $conn->prepare("SELECT * FROM todos WHERE user_id = ? AND completed = ?");
    $stmt->execute([$_SESSION['user_id'], $_GET['completed']]);
}else{
    $stmt = $conn->prepare("SELECT * FROM todos WHERE user_id = ?");
    $stmt->execute([$_SESSION['user_id']]);
}

$todos = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<a href="logout.php">Logout</a>


<h1></h1>Todo List</h1>

<a href="todo-list.php">All</a>
<a href="todo-list.php?completed=1">Completed</a>
<a href="todo-list.php?completed=0">Not Completed</a>

<form action="todo-add.php" method="post">
    <input type="text" name="title" placeholder="Add a todo title">
    <input type="text" name="description" placeholder="Add a description">
    <button type="submit">Add</button>
</form>


<ul>
    <?php foreach($todos as $todo): ?>
        <li><?php echo $todo['title'] . ' - ' . $todo['description'] . ' - ' . ($todo['completed'] ? 'Completed' : 'Not Completed') ?></li>
        <li>
        <form action="toggle-todo.php" method="post">
            <input type="hidden" name="todo_id" value="<?php echo $todo['id'] ?>">
            <button type="submit"><?php echo $todo['completed'] ? 'Not Completed' : 'Completed' ?></button>
        </form>

        <form action="todo-delete.php" method="post">
            <input type="hidden" name="todo_id" value="<?php echo $todo['id'] ?>">
            <button type="submit">Delete</button>
        </form>

        </li>
    <?php endforeach; ?>
</ul>





