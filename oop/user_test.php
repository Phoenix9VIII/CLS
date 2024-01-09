<?php
include 'user.php';

//instans or object
//instantiating a class is create an instance of a class
$u1 = new User;
$u1->name = "Mohamed";
$u1->email = "Mohamed@Gmail.com";
$u1->phone = "0110";
$u1->password = "123";
$u1->address = "El-Maadi";

$u2 = new User;
$u2->name = "Nour";
$u2->email = "Nour@Gmail.com";
$u2->phone = "0110";
$u2->password = "123";
$u2->address = "El-Maadi";

echo "<h1>" . $u1->name . "</h1>";
echo "<h1>" . $u2->name . "</h1>";
$u1->hello();
$u2->hello();
