<?php
echo "<h1 style='text-align:center;'>LOOPS</h1>";

//while loop
echo "<h2>PHP While Loop</h2>";
$x = 1;
while ($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}


//do while loop
echo "<h2>PHP Do While Loop</h2>";

$x = 1;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);


//for loop
echo "<h2>PHP For Loop</h2>";

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}


//foreach loop
echo "<h2>PHP Foreach Loop</h2>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}


//break
echo "<h2>PHP break</h2>";
for ($x = 0; $x <= 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
