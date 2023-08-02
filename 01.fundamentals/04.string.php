<?php
echo "<h1 style='text-align:center;'>STRING</h1>";

$txt = 'Hello World';

echo strlen($txt) . "<br>"; // outputs 11

echo str_word_count($txt) . "<br>"; // outputs 2

echo strrev($txt) . "<br>"; // outputs dlroW olleH

echo strpos($txt, "World") . "<br>"; // outputs 6

echo str_replace("World", "Dolly", $txt) . "<br>"; // outputs Hello Dolly
