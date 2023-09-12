<?php
// assignment 1 
// Replace ? With Arithmetic Operators
echo 10 * 20 + 15 % 3 + 190 + 10 - 400 . "<br>"; // 0


// assignment 2 

$a = "10";

// Needed Ouput
// 10
// "integer"
// 10
// "integer"
// 10
// "integer"
echo $a . "<br>"  . gettype(intval($a)) . "<br>";
echo $a . "<br>"  . gettype((int)($a)) . "<br>";
echo $a . "<br>"  . gettype(+ ($a)) . "<br>";
echo $a . "<br>"  . gettype(- (- ($a))) . "<br>";
settype($a, "integer");
echo $a . "<br>";
echo gettype($a) . "<br>";

// For The People Who Love Searching
// 10
// "integer"
// 10
// "integer"

// assignmetn 3 

// Needed Output
// -1

$a = 10;
$b = 20;

echo $a <=> $b;


// assignment 4 

$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b) . "<br>"; // True
var_dump($c <=> $a) . "<br>"; // True
var_dump($a != $b) . "<br>"; // True
var_dump($a !== $b) . "<br>"; // True
var_dump($a <= $c) . "<br>"; // True
var_dump(!($a === $c)) . "<br>"; // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(gettype((float) $a) < gettype($b)); // True

// assignment 5 

$points = 10;

// Write Your Code Here
++$points;
++$points;
++$points;

echo $points . "<br>"; // 13

// Write Your Code Here
--$points;
--$points;
--$points;
--$points;
--$points;

echo $points . "<br>"; // 8;

// assignment 6 

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
// $d = $a . " " . $b . " " . $c;

// Method Two
// $d = $a;
// $d .= $b . " " . $c;


// Method Three

// $d = "{$a} {$b} {$c}";

// Method Four
$d = "$a $b $c";

echo $d . "<br>"; // Elzero Web School

// assignment 7

$a = 10;
$b = 20;

echo (($a + $b) * ($a + $b) + $a * $a) * $a . "<br>"; // 10000

// assignment 8 

// Code 1
$a = @$none or die("Custom Error");

// Code 2
$f = @file("Not_A_File") or die("Custom Error");

// Code 3
@include ("Not_A_File") or die("Custom Error");
