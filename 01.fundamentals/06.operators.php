<!-- 
    PHP Arithmetic Operators
    PHP Assignment Operators
    PHP Comparison Operators
    PHP Increment / Decrement Operators
    PHP Logical Operators
    PHP String Operators
    PHP Array Operators
    PHP Conditional Assignment Operators
    PHP Type Operators
    PHP Bitwise Operators
    PHP Error Control Operators
    PHP Execution Operators
    PHP Operators Precedence
 -->

<?php
echo "<h1 style='text-align:center;'>OPERATORS</h1>";


// PHP Arithmetic Operators
echo "<h2>PHP Arithmetic Operators</h2>";
$x = 10;
$y = 5;
// +	Addition	
echo $x + $y . "<br>";

// -	Subtraction
echo $x - $y . "<br>";

// *	Multiplication	
echo $x * $y . "<br>";

// /	Division
echo $x / $y . "<br>";

// %	Modulus	
echo $x % $y . "<br>";

// **	Exponentiation	
echo $x ** $y . "<br>";

// PHP Assignment Operators
echo "<h2>PHP Assignment Operators</h2>";

$a = 10;
$b = 5;
// =	Assign
// echo $a = $b . "<br>";

// +=	Add and assign
echo $a += $b . "<br>";

// -=	Subtract and assign
echo $a -= $b . "<br>";

// *=	Multiply and assign
echo $a *= $b . "<br>";

// /=	Divide and assign
echo $a /= $b . "<br>";

// %=	Modulus and assign
echo $a %= $b . "<br>";


// PHP Comparison Operators
echo "<h2>PHP Comparison Operators</h2>";

$c = 10;
$d = 5;

// ==	Equal
var_dump($c == $d);
echo "<br>";

// ===	Identical
var_dump($c === $d);
echo "<br>";

// !=	Not equal
var_dump($c != $d);
echo "<br>";

// <>	Not equal
var_dump($c <> $d);
echo "<br>";

// !==	Not identical
var_dump($c !== $d);
echo "<br>";

// >	Greater than
var_dump($c > $d);
echo "<br>";

// <	Less than
var_dump($c < $d);
echo "<br>";

// >=	Greater than or equal to
var_dump($c >= $d);
echo "<br>";

// <=	Less than or equal to
var_dump($c <= $d);
echo "<br>";

// <=>	Spaceship
var_dump($c <=> $d);
echo "<br>";

// ??	Coalesce
var_dump($c ?? $d);
echo "<br>";

// PHP Increment / Decrement Operators
echo "<h2>PHP Increment / Decrement Operators</h2>";

$e = 10;
$f = 5;

// ++$x	Pre-increment
echo ++$e . "<br>";

// $x++	Post-increment
echo $e++ . "<br>";

// --$x	Pre-decrement
echo --$f . "<br>";

// $x--	Post-decrement
echo $f-- . "<br>";

// PHP Logical Operators
echo "<h2>PHP Logical Operators</h2>";
$g = 10;
$h = 5;

// and	And
if ($g == 10 and $h == 6) {
  echo "True";
} else {
  echo "False";
}
echo "<br>";

// or	Or
if ($g == 10 or $h == 7) {
  echo "True";
} else {
  echo "False";
}
echo "<br>";

// xor	Xor
if ($g == 10 xor $h == 5) {
  echo "True";
} else {
  echo "False";
}
echo "<br>";

// &&	And
if ($g == 10 && $h == 5) {
  echo "True";
} else {
  echo "False";
}
echo "<br>";

// ||	Or
if ($g == 10 || $h == 5) {
  echo "True";
} else {
  echo "False";
}
echo "<br>";

// !	Not
if ($g !== 10) {
  echo "True";
} else {
  echo "False";
}
echo "<br>";

// PHP String Operators
echo "<h2>PHP String Operators</h2>";

$i = "Hello";
$j = " World!";
// .	Concatenation
echo $i . $j . "<br>";

// .=	Concatenation assignment
echo $i .= $j . "<br>";

// PHP Array Operators
echo "<h2>PHP Array Operators</h2>";

$k = array("a" => "red", "b" => "green");
$l = array("c" => "blue", "d" => "yellow");

// +	Union
var_dump($k + $l);
echo "<br>";

// ==	Equality
var_dump($k == $l);
echo "<br>";

// ===	Identity
var_dump($k === $l);
echo "<br>";

// !=	Inequality
var_dump($k != $l);
echo "<br>";

// <>	Inequality
var_dump($k <> $l);
echo "<br>";

// !==	Non-identity
var_dump($k !== $l);
echo "<br>";

// PHP Conditional Assignment Operators
echo "<h2>PHP Conditional Assignment Operators</h2>";

$m = 10;
$n = 5;

// ?:	Ternary
echo ($m == $n) ? "True" : "False";
echo "<br>";

// ??	Null coalescing
echo $m ?? $n;
echo "<br>";

// PHP Type Operators
echo "<h2>PHP Type Operators</h2>";

$o = 10;
$p = "10";

// instanceof	Checks if an object is created from a specified class
var_dump($o instanceof $p);
echo "<br>";

// PHP Bitwise Operators
echo "<h2>PHP Bitwise Operators</h2>";

$q = 10;
$r = 5;

// &	And
echo $q & $r;
echo "<br>";

// |	Or
echo $q | $r;
echo "<br>";

// ^	Xor
echo $q ^ $r;
echo "<br>";

// ~	Not
echo ~$q;
echo "<br>";

// <<	Shift left
echo $q << $r;
echo "<br>";

// >>	Shift right
echo $q >> $r;
echo "<br>";

// PHP Error Control Operators
echo "<h2>PHP Error Control Operators</h2>";

// @	Error Control
echo @($q / 0);
echo "<br>";

// PHP Execution Operators
echo "<h2>PHP Execution Operators</h2>";

// ``	Execution
echo `dir`;
echo "<br>";

// PHP Operators Precedence
echo "<h2>PHP Operators Precedence</h2>";

// https://www.w3schools.com/php/php_operators_precedence.asp

?>