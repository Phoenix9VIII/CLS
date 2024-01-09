<?php
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$city_id = $_POST["city_id"];

if(isset($_FILES["image"]["tmp_name"]) && $_FILES["image"]["tmp_name"] != ""){
    $tmp = $_FILES["image"]["tmp_name"];
    $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    $location = "../img/users/";
    // Generate Unique File name 
    $filename = strtolower($_POST["name"]);
    $filename = str_replace(" ", "-", $filename);
    $filename = date("Y-m-d-h-i-s") . "-" . $filename . "." . $ext;
    // Generate Unique File name 
    move_uploaded_file($tmp, $location . $filename);

    $sql = "INSERT INTO users (image, name, email, password, phone, address, city_id) VALUES ('$filename', '$name', '$email', '$password', '$phone', '$address', '$city_id')";
} else {
    $sql = "INSERT INTO users (name, email, password, phone, address, city_id) VALUES ('$name', '$email', '$password', '$phone', '$address', '$city_id')";
}
mysqli_query($connection, $sql);
header("Location: ../users/list.php");
?>