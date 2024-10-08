 <?php
 $name = 'dudu';  // String 
 $age = 32;       // Integer
 $isMale = true;  // True or Boolean
 $height = 1.71;  // Float 
$salary = null;   // Null



echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>';
echo $height.'<br>';
echo $salary.'<br>';


echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';


var_dump($name, $age, $isMale, $height, $salary);
$name = false;



echo gettype($name).'<br>';


is_string($name);  // false
is_int($age);      // true
is_bool($isMale);  // true
is_double($height);// true




var_dump(isset($name)); // true
var_dump(isset($name2)); // false















// constants
define('PI',3.14);
echo PI.'<br>';
defined('PI'); // true;

// using php built-in constants
echo SORT_ASC;
echo SORT_DESC;
echo SORT_INT_MAX;


