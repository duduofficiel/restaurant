<?php

// Function which prints "Hello i am theCodeholic"
function Hello ($name)
{
    echo "Hello I am $name";
}

hello('Dudu');
hello('officiel');
// create sum of tow functions
function sum(...$nums)
{
    echo '<pre>';
    var_dump($nums);
    echo '</pre>';
}
echo sum(4, 5, 6, 7);