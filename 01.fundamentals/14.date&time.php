<?php
echo "<h1 style='text-align:center;'>PHP DATE & TIME</h1>";

date_default_timezone_set("Asia/Dhaka");
echo date("d/m/Y");
echo "<br>";
echo date("d.m.Y");
echo "<br>";
echo date("d-m-Y");
echo "<br>";


echo "Today is " . date("d-m-y") . '<br>';

echo "Today is " . date("l") . '<br>';

echo "Today is " . date("d") . '<br>';
// 
echo "Today is " . date("D") . '<br>';

echo "Today is " . date("m") . '<br>';

echo "Today is " . date("M") . '<br>';

echo "Today is " . date("y") . '<br>';

echo "Today is " . date("Y") . '<br>';

echo "Today is " . date("l, d-m-y") . '<br>';

echo "Today is " . date("l, d F, Y") . '<br>';

echo "Today is " . date("l, d F, Y h:i:s A") . '<br>';

echo "Today is " . date("l, d F, Y h:i:s a") . '<br>';

echo "The time is " . date("h:i:s a") . '<br>';

echo "The time is " . date("h:i:s A") . '<br>';

echo "The time is " . date("h:i:s") . '<br>';

echo date_default_timezone_get();
