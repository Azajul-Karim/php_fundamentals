<?php
echo "<h1 style='text-align:center;'>SHOW OUTPUT</h1>";

// echo and print are more or less the same. They are both used to output data to the screen. The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
echo "Hello", " World" . "<br>";

// print also outputs data to the screen. The difference is that it only allows one parameter and always returns 1. 
print "Hello World" . "<br>";

// var_dump displays structured information such as type and value of the given variable. Arrays are explored recursively with values indented to show structure.
$name = "John";
print $name . "<br>";
var_dump($name);
