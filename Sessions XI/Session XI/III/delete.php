<?php 
$id = 1;
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
$sql = "DELETE FROM tasks WHERE id = id";
mysqli_query($connection, $sql);
?>