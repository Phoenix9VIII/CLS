<?php 
$id = $_GET["tid"];
// $id = 1;
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
$sql = "DELETE FROM tasks WHERE id = id";
mysqli_query($connection, $sql);
header("Location:../tasks/list.php");
?>