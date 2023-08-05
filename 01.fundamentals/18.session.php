<?php
echo "<h1 style='text-align:center;'>SESSION</h1>";

session_start();

$_SESSION['name'] = "John";
$_SESSION['age'] = 25;

session_unset();
echo "User name is: " . $_SESSION['name'] . "<br>";


echo "User age is: " . $_SESSION['age'] . "<br>";
