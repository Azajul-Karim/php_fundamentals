<?php
echo "<h1 style='text-align:center;'>ERROR REPORT</h1>";

//Error Report

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

$price = 45;

if ($price == 45) {
  print "The price is $price <br>";
} else {
  print "The price is not 45 <br>";
}


//error handling with exception

function checkNum($number)
{
  if ($number > 1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

try {
  checkNum(2);
  echo 'If you see this, the number is 1 or below';
} catch (Exception $e) {
  echo 'Message: ' . $e->getMessage();
}
