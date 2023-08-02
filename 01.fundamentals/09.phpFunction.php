<?php
echo "<h1 style='text-align:center;'>FUNCTIONS</h1>";

// PHP Functions
echo "<h2>PHP Functions</h2>";

function writeMsg()
{
  echo "Hello world!";
}

writeMsg(); // call the function

echo "<br>";

// PHP Function Arguments 
function familyName($fname)
{
  echo " My Family Name $fname.<br>";
}

familyName("Topu");
familyName("Tuhin");
familyName("Tahmid");

echo "<br>";

// PHP Function - Returning values
function sum($x, $y)
{
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

echo "<br>";

//deafult argument value
function setHeight($minheight = 50)
{
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50