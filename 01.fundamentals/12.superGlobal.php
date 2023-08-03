<?php
echo "<h1 style='text-align:center;'>SUPER GLOBAL</h1>";
/*
 $GLOBALS
 $_SERVER
 $_REQUEST
 $_POST
 $_GET
 $_FILES
 $_ENV
 $_COOKIE
 $_SESSION
*/


// $GLOBALS
// $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).
echo "<h2>GLOBALS</h2>";
$x = 5;
$y = 10;

function sum()
{
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

sum();
echo $z;

// $_SERVER
// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
echo "<h2>SERVER</h2>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

// $_REQUEST
// $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
echo "<h2>REQUEST</h2>";
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <label for="username">User Name</label>
  <input type="text" name="username">
  <input type="submit" value="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_REQUEST['username'];
  if (empty($name)) {
    echo "<span style='color:red;'>User Name is empty</span>";
  } else {
    echo "<span style='color:green;'>User Name is $name</span>";
  }
}

// $_POST
// $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post".
echo "<h2>POST</h2>";
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <label for="username">User Name</label>
  <input type="text" name="username">
  <input type="submit" value="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST['username'];
  if (empty($name)) {
    echo "<span style='color:red;'>User Name is empty</span>";
  } else {
    echo "<span style='color:green;'>User Name is $name</span>";
  }
}

// $_GET
// $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".
echo "<h2>GET</h2>";
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
  <label for="username">User Name</label>
  <input type="text" name="username">
  <input type="submit" value="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
  $name = $_GET['username'];
  if (empty($name)) {
    echo "<span style='color:red;'>User Name is empty</span>";
  } else {
    echo "<span style='color:green;'>User Name is $name</span>";
  }
}

// $_FILES
// $_FILES is a PHP super global variable which is used to collect information about files uploaded by a user.
echo "<h2>FILES</h2>";
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <label for="file">File</label>
  <input type="file" name="file">
  <input type="submit" value="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $file = $_FILES['file'];
  if (empty($file)) {
    echo "<span style='color:red;'>File is empty</span>";
  } else {
    echo "<span style='color:green;'>File is $file</span>";
  }
}
