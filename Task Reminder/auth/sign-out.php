<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
unset($_SESSION["user_id"]);
unset($_SESSION["user_email"]);
session_destroy();
header("Location: ../auth/sign-in.php");
?>