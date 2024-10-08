<?php

// print current timestamp
echo time().'<br>';
//print current date
echo date('Y-m-d H:i:s'). '<br>';

// print yesterday
echo date('Y-m-d H:i:s', time()- 60 * 60 *24). '<br>';

// Different format: https://www.php.net/manual/en/function.date.php
 echo date('F j Y, H:i:s'). '<br>';   

 // string to timestamp
 echo strtotime('now').'<br>';
 echo strtotime('now').'<br>';
 echo strtotime('+1 week').'<br>';
 
 // parse date 
 $dateString = '2024-09-27 8:00:00';
 $parsedDate = date_parse($dateString);
 echo '<pre>';
 var_dump($parsedDate);
 echo '</pre>';
// parse date from format
//https://www.php.net/manual/en/function.date-parse-from-format.php

$dateString = 'february 4 2020 12:45:35';

$parsedDate = date_parse_from_format('F j Y H:i:s', $date);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';
 