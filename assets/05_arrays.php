<?php

// create array
$fruits = ["Banana","Apple","Orange"];

//print the whole array
echo'<pre>';
var_dump ($fruits);
echo '</pre>';

//get element by index
echo $fruits[1];

//set element by index
$fruits[1]='peach';
echo '<pre>';
var_dump ($fruits);
echo '</pre';

//chek if array has element at index
echo'<pre>';
var_dump(isset($fruits[2]));
echo '</pre>';

// append element
$fruits[]= 'mango';
echo '<pre';
var_dump ($fruits);
echo'</pre>';


// print the lenght of the array
echo count($fruits).'<br>';


//add element at the end of the array
array_push($fruits,'Mango');

// remove element from the end of the array
echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

//add element at the beginning of the array
array_unshift($fruits,'Apple');
echo '<pre>';
var_dump($fruits);
echo '</pre>';
// remove element from the beginning of
echo array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';
//split the string into an array
$string = " Mango, Apple, Peach";
$fruits2 = explode(",",$string);
echo '<pre>';
var_dump($fruits2);
echo '</pre>';
//combine array elements into string
echo implode("&", $fruits2);

//Check if element exist in the array
in_carray('Apple', $fruits2); //true
in_array('Orange', $fruits2); //false

//search element index in the array
echo array_search('Orange', $fruits2);
// Merge tow arrays
$newArray = array_merge($fruits, $fruits2);
$newArray = [...$fruits,...$fruits2 ];
echo '<pre>';
var_dump(newArrray);
echo '</pre>';


// Sorting of array (Reverse order als)
echo '<pre>';
var_dump($fruits2);
echo '</pre>';
rsort($fruits2);
echo '<pre>';
var_dump($fruits2);
echo '</pre>';

//Filter, map, reduce of array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
$evens = array_filter($numbers, fn($n) => $n % 2 === 0) ;
echo '<pre>';
var_dump($evens);
echo '</pre>';

$newArray = array_map(fn($n) => $n + 1, $numbers);
echo '<pre>';
var_dump($newArray);
echo '</pre>';

$sum = array_reduce($numbers, fn($carry, $n) => $carry + $n);
echo $sum; 

https://www.php.net/manual/en/ref.array.php





// Create an associative array
$person = [
'name' => 'Dudu',
'surname' => 'officiel',
'age' => 32,
'hobbies' => ['tennis']
];

echo '<pre>';
var_dump($person);
echo '</pre>';

// Get element by key
echo $person['name'].'<br>';

// set element by key
$person ['name'] = 'Nina';
echo '<pre>';
var_dump($person);
echo '</pre>';

// check if array has specific key
echo '<pre>';
var_dump(isset($person['address']));
echo '</pre>';

// print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// print the values of the array

echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// sorting associative arrays by values, by keys
ksort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';
// tow dimensional arrays
$todos = [
    ['title' => 'Todo 1', 'completed' => true],
    ['title' => 'Todo 2', 'completed' => false],
];
echo '<pre>';
var_dump($todos);
echo '</pre>';