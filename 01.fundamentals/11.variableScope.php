<?php
echo "<h1 style='text-align:center;'>VARIABLE SCOPE</h1>";

//local scope

function testOne()
{
  $x = 5;
  echo $x;
  echo "<br>";
}

function testTwo()
{
  $y = 10;
  echo $y;
  echo "<br>";
}

testOne();
testTwo();

//global scope

$a = 5;
$b = 10;

function testThree()
{
  global $a, $b;
  echo "Accessing global variables inside function: " . $a . " " . $b;
}

testThree();

echo "<br>";

function testFour()
{
  $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}

testFour();
echo "Accessing global variables outside function: " . $c;
