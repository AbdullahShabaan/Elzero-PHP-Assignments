<?php

// assignment 1 
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

// Write Your Code Here
$str = str_replace(["%", "0"], [$let_two, $let_one], $str) . "<br>";
// OR
$var1 = substr_replace($str, $let_one, $num_one);
echo  strtr($var1, "%", $let_two) . "<br>";

echo $str; // Elzero


// assignment 2 
$str2 = "Orezle";

echo ucfirst(strtolower(strrev($str2))) . "<br>";
// Elzero


// assignment 3 

$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here
$str = str_repeat(strtolower(substr_replace($str, $char, $num)), 3);
echo $str;
// aaa_aaa_aaa_


// assignment 4 

$str = strip_tags("<div><b>Elzero</b></div>", "<b>") . "<br>";
echo $str;
// <b>Elzero</b>


// assignment 5 

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, strtolower($e), $four) . "<br>";
echo substr_count($str, strtolower($o), -$four) . "<br>";
// 1
// 2


// assignment 6 

$chars = ["E", "l", "z", "e", "r", "o"];

echo implode($chars) . "<br> ";
// Output
// "Elzero"


// assignment 7 

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$word = "";
foreach ($chars as $c) {
    if (is_string($c)) {
        $word .= $c;
    }
}
echo ucfirst(strtolower($word));
// echo implode($chars);
// Output
// "Elzero"