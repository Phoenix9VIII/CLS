<?php
$id = $_GET["uid"];
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
$sql = "DELETE FROM users WHERE id = $id";
mysqli_query($connection, $sql);

header("Location: ../users/list.php");
?>