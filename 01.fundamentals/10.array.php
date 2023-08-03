<?php
echo "<h1 style='text-align:center;'>PHP ARRAY</h1>";


//indexed arrays
echo "<h2>PHP Indexed Arrays</h2>";
$x = array(1, 2, 3, 4, 5);
echo $x[0];

echo "<br>";

var_dump($x);

echo "<br>";

echo count($x);

echo "<br>";

$length = count($x);
for ($i = 0; $i < $length; $i++) {
  echo $x[$i] . "<br>";
}

echo "<br>";


//associative arrays
echo "<h2>PHP Associative Arrays</h2>";

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "Peter is " . $age['Peter'] . " years old.";

echo "<br>";

foreach ($age as $key => $value) {
  echo "Key =" . $key . ", Value =" . $value . "<br>";
}

echo "<br>";

//multidimensional arrays
echo "<h2>PHP Multidimensional Arrays</h2>";

$cars = array(
  array("Volvo", 22, 18),
  array("BMW", 15, 13),
  array("Saab", 5, 2),
  array("Land Rover", 17, 15)
);

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";

echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";

echo "<br>";

for ($row = 0; $row < 4; $row++) {

  echo "<p><strong>Row number $row</strong></p>";

  echo "<ul>";

  for ($col = 0; $col < 3; $col++) {

    echo "<li>" . $cars[$row][$col] . "</li>";
  }

  echo "</ul>";
}

echo "<br>";

//sort arrays
echo "<h2>PHP Sort Arrays</h2>";

$numbers = array(4, 6, 2, 22, 11);

sort($numbers);

$length = count($numbers);

for ($i = 0; $i < $length; $i++) {
  echo $numbers[$i] . "<br>";
}

echo "<br>";

$names = array("Peter", "Joe", "Glenn", "Cleveland");

sort($names);

$length = count($names);

for ($i = 0; $i < $length; $i++) {
  echo $names[$i] . "<br>";
}

echo "<br>";

//sort associative arrays
echo "<h2>PHP Sort Associative Arrays</h2>";

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

asort($age);

foreach ($age as $key => $value) {
  echo "Key=" . $key . ", Value=" . $value . "<br>";
}

echo "<br>";
