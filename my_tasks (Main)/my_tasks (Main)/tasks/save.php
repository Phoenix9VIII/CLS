<?php
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
$name = $_POST["name"];
$desc = $_POST["description"];
$date = $_POST["date"];
$due = $_POST["due_date"];
$user = $_POST["user_id"];
$cat = $_POST["category_id"];
$status = $_POST["status_id"];
$sql = "INSERT INTO tasks (name, category_id, user_id, description, due_date, date) VALUES ('$name', $cat, $user, '$desc', '$due', '$date')";
mysqli_query($connection, $sql);
//***********Fetching the Recently added Task */
$sql = "SELECT * FROM tasks ORDER BY id DESC LIMIT 1";
$tasks_list = mysqli_query($connection, $sql);
$latest_task = mysqli_fetch_assoc($tasks_list);
$latest_task_id = $latest_task["id"];
//***********Fetching the Recently added Task */
/*********Attach Task Status */
$now = date("Y-m-d h:i:s");
$sql = "INSERT INTO status_task (task_id, user_id, date, status_id) VALUES ($latest_task_id, $user, '$now', $status)";
mysqli_query($connection, $sql);
// /*********Attach Task Status */
header("Location: ../tasks/list.php");
?>