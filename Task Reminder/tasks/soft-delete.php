<?php
session_start();
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    $_SESSION["login_error"] = "Please Log In & Try Again.";
    $_SESSION["back_to"] = $_SERVER["REQUEST_URI"];
    header("Location: ../auth/sign-in.php");
}
$id = $_GET["tid"];
$action = $_GET["action"];
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');

if ($action == "delete") {
    $sql = "UPDATE tasks SET active = 2 WHERE id = $id";
    $loc = "list.php";
} elseif ($action == "restore") {
    $sql = "UPDATE tasks SET active = 1 WHERE id = $id";
    $loc = "trash.php";
} elseif ($action == "deleteForever") {
    $sql = "DELETE FROM tasks WHERE id = $id";
    $loc = "trash.php";
}

mysqli_query($connection, $sql);
header("Location: ../tasks/$loc");
