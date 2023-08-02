<?php
echo "<h1 style='text-align:center;'>CONSTANTS</h1>";

// A constant is an identifier (name) for a simple value. The value cannot be changed during the script. A valid constant name starts with a letter or underscore (no $ sign before the constant name). 

define("GREETING", "Hello World!");
echo GREETING . "<br>"; // outputs "Hello World!"

function myTest()
{
  echo GREETING . "<br>";
}

myTest();

// Constants are automatically global and can be used across the entire script.
