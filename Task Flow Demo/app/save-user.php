<?php
$id = $_POST["id"];
$name = $_POST["name"];
$img = $_POST["img"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$city_id = $_POST["city_id"];
$desc = $_POST["description"];
$connection = mysqli_connect('localhost', 'root', '', 'taskflow_db');

$sql = "INSERT INTO tasks (id,name,img,email,password,phone,address,city_id,description) 
VALUES ('$id', $name, $img, '$email', '$password', '$phone','$address','$city_id','$desc')";

mysqli_query($connection, $sql);

// header("Location:../tasks/list.php");
