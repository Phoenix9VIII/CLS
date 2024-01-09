<?php 
$name = $_POST["name"];
$desc = $_POST["description"];
$date = $_POST["date"];
$due = $_POST["due_date"];
$user = $_POST["user_id"];
$cat = $_POST["category_id"];
$id = $_POST["task_id"];

$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
$sql = "UPDATE tasks SET name = '$name', description ='$desc' , date = '$date', due_date = '$due' , user_id = $user, category_id = $cat WHERE id = $id";
mysqli_query($connection, $sql);
header("Location:../tasks/list.php");
?>