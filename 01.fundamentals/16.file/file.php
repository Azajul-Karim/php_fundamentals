<?php
echo "<h1 style='text-align:center;'>FILE</h1>";

// Read file
$file = fopen("tx.txt", "r") or die("Unable to open file!");

// echo fread($file, filesize("tx.txt"));
// fclose($file);

// Read single line
// echo fgets($file, filesize("tx.txt"));
// fclose($file);

// Read single character
// echo fgetc($file);
// fclose($file);

// Check end of file
// while (!feof($file)) {
//   echo fgets($file) . "<br>";
// }
// fclose($file);

// Create file
$createFile = fopen("newFile.txt", "w") or die("Unable to open file!");

$txt = "Hello World\n";

// Write file
fwrite($createFile, $txt);
fclose($createFile);
