<?php
$name = $_POST["name"];
$desc = $_POST["description"];
$date = $_POST["date"];
$due = $_POST["due_date"];
$user = $_POST["user_id"];
$cat = $_POST["category_id"];
/* Establish a connection between PHP and a MYSQL Database */
// mysqli_connect('server_name', 'username', 'password', 'database_name');
// mysqli_connect('10.168.20.91', 'ahmed', '123', 'my_tasks');
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');

$sql = "INSERT INTO tasks (name, category_id, user_id, description, due_date, date) VALUES ('$name', $cat, $user, '$desc', '$due', '$date')";

/* To Send an SQL Statement to the Database */
// mysqli_query(database connection, sql statement);
mysqli_query($connection, $sql);

header("Location:../tasks/list.php");
?>