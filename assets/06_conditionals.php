<?php

$age = 24;
$salary = 300000;

// if condition
if ($age > 30 || $salary === 300000) {
echo "More than 30";
} elseif($age > 25) {
    echo "More than 25";
}else { 
    echo "Unknow";
}
if ($age =='24') {
    echo "true";
}











// Ternary if
echo $age < 22 ? 'Young' : 'Old';

echo $age ?: 18;

// Null coalescing operator
$var = isset($name) ? $name : 'John';

$var = $name ?? 'john';

echo '<pre>';
var_dump($var);
echo '</pre>';

// Null coalescing assignment operator. since php 7.4
$person = [
    'name' => 'john'
];

if (!isset($person['name'])) {
    $person['name'] = 'unknown';
}
echo '<pre>';
var_dump($person);
echo '</pre>';



// switch
$userRole = 'admin'; // editor, user

switch($userRole) {
    case 'admin':
echo "You can do aything";
break;
case 'editor':
    //editor
    break ;
    case 'user':
        //user
        break;
        default:
        echo 'Iinvalid role';

}