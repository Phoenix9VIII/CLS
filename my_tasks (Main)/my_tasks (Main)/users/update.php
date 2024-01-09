<?php
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$city_id = $_POST["city_id"];
$id = $_POST["id"];

$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');

$sql = "UPDATE users SET name = '$name', email = '$email', password = '$password', phone = '$phone', address = '$address', city_id = $city_id WHERE id = $id";

mysqli_query($connection, $sql);

header("Location: ../users/list.php");
?>