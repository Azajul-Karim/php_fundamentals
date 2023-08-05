<?php
echo "<h1 style='text-align:center;'>FILER</h1>";

$str = "<h1>Hello World!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING); // Remove HTML tags
echo $newstr . "<br>";

$int = 123.6;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo "Integer is valid<br>";
} else {
  echo "Integer is not valid<br>";
}

$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo "$ip is a valid IP address<br>";
} else {
  echo "$ip is not a valid IP address<br>";
}

$email = "Topu@gmail.com";

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo "$email is a valid email address<br>";
} else {
  echo "$email is not a valid email address<br>";
}

$url = "https://www.w3schools.com";

if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo "$url is a valid URL<br>";
} else {
  echo "$url is not a valid URL<br>";
}


//Advanced Filters

$int = 300;
$min = 1;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
  echo "Variable value is not within the legal range<br>";
} else {
  echo "Variable value is within the legal range<br>";
}

$urls = "https://www.w3schools.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
  echo "$url is a valid URL<br>";
} else {
  echo "$url is not a valid URL<br>";
}


?>

<table style='text-align:center;'>
  <tr>
    <th>Filter Name</th>
    <th>Filter ID</th>
  </tr>
  <?php
  foreach (filter_list() as $id => $filter) {
    echo
    '<tr>
     <td>' . $filter . '</td>
     <td>' . filter_id($filter) . '</td>
    </tr>';
  }
  ?>
</table>