<?php
echo "<h1 style='text-align:center;'>CONDITIONAL STSTEMENTS</h1>";

// PHP Conditional Statements
echo "<h2>PHP Conditional Statements</h2>";

// if statement
$x = 10;
if ($x > 15) {
  echo "Hello World!";
} else {
  echo "Goodbye World!";
}
echo "<br>";
if ($x > 15) {
  echo "Hello World!";
} elseif ($x > 12) {
  echo "Goodbye World!";
} else {
  echo "Wrong!";
}

// switch statement
echo "<h2>PHP switch Statement</h2>";
$color = "red";
switch ($color) {
  case "red":
    echo "Hello";
    break;
  case "green":
    echo "Welcome";
    break;
  default:
    echo "Wrong!";
}
