<?php
echo "<h1 style='text-align:center;'>EXPLODE & IMPLODE</h1>";

//explode & implode
echo "<h3>Explode</h3>";

$myString = "I Love PHP So Much";

$myArray = explode(" ", $myString);

echo "<pre>";

print_r($myArray);


echo "<h3>Implode</h3> ";

$myNewString = implode(" ", $myArray);
echo $myNewString;

echo "<br>";

//Case Change
echo "<h3>Case Change</h3>";

?>

<form action="./22.explode&implode.php"></form>