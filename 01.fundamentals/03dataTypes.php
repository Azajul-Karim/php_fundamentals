<?php
echo "<h1 style='text-align:center;'>DATA TYPES</h1>";

// 1. String
echo "<h2>String</h2>";
$name = "Rahul";
echo "My name is $name<br>";

// 2. Integer
echo "<h2>Integer</h2>";
$income = 455;
echo "My income is $income<br>";

// 3. Float
echo "<h2>Float</h2>";
$income = 455.35;
echo "My income is $income<br>";

// 4. Boolean
echo "<h2>Boolean</h2>";
$a = true;
$b = false;
echo var_dump($a) . "<br>";
echo var_dump($b) . "<br>";

// 5. Array
echo "<h2>Array</h2>";
$name = array("Rahul", "Shakil", "Karim");
echo var_dump($name);
echo "<br>";

// 6. Object  
echo "<h2>Object</h2>";
class Student
{
  function department()
  {
    return "Computer Science";
  }
}

$student1 = new Student();
echo $student1->department() . "<br>";

// 7. Null
echo "<h2>Null</h2>";
$name = null;
echo var_dump($name);
echo "<br>";

// 8. Resource
echo "<h2>Resource</h2>";
echo "<p>It is a special variable, holding a reference to an external resource. Resources are created and used by special functions.</p>";

// 9. Constant
echo "<h2>Constant</h2>";
define("PI", 3.1416);
echo "The value of PI is " . PI . "<br>";

// 10. Magic Constants
echo "<h2>Magic Constants</h2>";
echo __LINE__ . "<br>";
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";
echo __FUNCTION__ . "<br>";
echo __CLASS__ . "<br>";
echo __TRAIT__ . "<br>";
echo __METHOD__ . "<br>";
echo __NAMESPACE__ . "<br>";
