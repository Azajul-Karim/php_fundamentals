<?php
echo "<h1 style='text-align:center;'>COOKIE</h1>";

// setcookie(name, value, expire, path, domain, secure, httponly);

setcookie("Visited", "Yes", time() + 86400, "/") or die('Could Not Set Cookie'); // 86400 = 1 day

if (isset($_COOKIE['Visited'])) {
  echo "You Have Visited This Page Before";
} else {
  echo "This Is Your First Visit";
}

echo "<br>";

setcookie("Visited", "", time() - 86400, "/"); // to delete cookie

echo "Cookie Deleted";
