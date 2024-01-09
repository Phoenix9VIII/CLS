<?php
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');

$status_id = $_POST["status_id"];
$user_id   = $_POST["user_id"];
$task_id   = $_POST["task_id"];
$date      = $_POST["date"];

$sql = "INSERT INTO status_task (user_id, task_id, status_id, date) VALUES ($user_id, $task_id, $status_id, '$date')";

mysqli_query($connection, $sql);
header("Location: ../tasks/list.php");
?>