<?php

// ...
while (true) {

}

// loop with $counter
$counter = 0;
while ($counter < 10) {
    echo "Printng counter: $counter". '<br>';
    $counter++; 
}

// do - while
$counter = 0;
do{
echo "printing counter: $counter". '<br>';
$counter++;
} while ($counter < 10);

// for
for ($i = 0; $i < 10; $i++) {
    echo "Printng counter: $i". '<br>';

} 
// foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit) {
    echo $i .''.$fruit . '<br>';
}
// Iterate Over associative array.

$person = [
    'name' => 'Dudu',
    'surname' => 'officiel'
];
foreach ($person as $key => $value) {
echo $key. ''.$value.'<br>';
if ($key. === 'name') {
    break;
}
}