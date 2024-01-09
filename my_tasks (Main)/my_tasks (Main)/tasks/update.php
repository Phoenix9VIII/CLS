<?php
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
$name = $_POST["name"];
$desc = $_POST["description"];
$date = $_POST["date"];
$due = $_POST["due_date"];
$user = $_POST["user_id"];
$cat = $_POST["category_id"];
$id = $_POST["task_id"];
$status_id = $_POST["status_id"];

$sql = "UPDATE tasks SET name = '$name', description = '$desc', due_date = '$due', date = '$date', user_id = $user, category_id = $cat WHERE id = $id";
mysqli_query($connection, $sql);

$now = date("Y-m-d h:i:s");
$sql = "INSERT INTO status_task (task_id, user_id, status_id, date) VALUES ($id, $user, $status_id, '$now')";
mysqli_query($connection, $sql);

header("Location: ../tasks/list.php");
?>