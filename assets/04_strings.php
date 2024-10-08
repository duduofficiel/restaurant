<?php

// create simple string
$nome = 'Dudu';
$string = 'bonjour $name je suis 32'.$name;
$string2 = "bonjour $name je suis 32";
echo $string.'<br>';
echo $string2.'<br>';

//String concatenattion
echo "bonjour "." le monde" . " et php";

//String functtions
$string = " bonjour le monde ";
echo '<br>';
echo "1 - " . strlen($string) .'<br>';
echo "2 - " . trim($string) .'<br>';
echo "3 - " . ltrimn($string) .'<br>';
echo "4 - " . rtrim($string) .'<br>';
echo "5 - " . str_word_count($string) .'<br>';
echo "6 - " . strrev($string) .'<br>';
echo "7 - " . strtoupper($string) .'<br>';
echo "8 - " . strtolower($string) .'<br>';
echo "9 - " . ucfirst('bonjour') .'<br>';
echo "10 - " . lcfirst('Bonjour') .'<br>';
echo "11 - " . ucwords('bonjour le monde') .'<br>';
echo "12 - " . strpos($string, 'le monde') .'<br>';
echo "13 - " . stripos($string, 'le monde') .'<br>';
echo "14 - " . substr($string, 8) .'<br>';
echo "15 - " . substr_replace('le monde', 'php', $string) .'<br>';
echo "16 - " . str_ireplace('le monde', 'php', $string) .'<br>';
