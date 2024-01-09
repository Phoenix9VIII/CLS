<?php
session_start();
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    $_SESSION["login_error"] = "Please Log In & Try Again.";
    $_SESSION["back_to"] = $_SERVER["REQUEST_URI"];
    header("Location: ../auth/sign-in.php");
}
$id = $_GET["uid"];
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
$sql = "DELETE FROM users WHERE id = $id";
mysqli_query($connection, $sql);

header("Location: ../users/list.php");
