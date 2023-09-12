<?php
// assignment 1 
$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];

// Output
//   Array
//   (
//     [0] => Array
//       (
//         [ag] => Ahmed Gamal
//         [om] => Osama Mohamed
//       )
//     [1] => Array
//       (
//         [mg] => Mahmoud Gamal
//         [as] => Ahmed Samy
//       )
//     [2] => Array
//       (
//         [fa] => Farid Ahmed
//         [sm] => Sayed Mohamed
//       )
//   )

echo "<pre>";
print_r(array_chunk($friends, 2));
echo "</pre>";


// assignment 2 

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

// Output
// Array
// (
//   [h] => HTML
//   [c] => CSS
//   [j] => JavaScript
// )

echo "<pre>";
print_r(array_replace($codes, $means));
echo "</pre>";



// assignment 3 


$friends2 = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];

// Output
//   Array
//   (
//     [as] => Ahmed Samy
//     [mg] => Mahmoud Gamal
//     [om] => Osama Mohamed
//     [ag] => Ahmed Gamal
//   )

echo "<pre>";
print_r(array_reverse(array_flip($friends2)));
echo "</pre>";



// assignment 4 

$nums = [10, 20, 30];

// Output
// 60
// 60
// first way
$sum = fn ($num1, $num2) =>  $num1 + $num2;
echo array_reduce($nums, $sum) . "<br>";
// second way
echo array_sum($nums);

echo "<hr>";
// assignment 5 

$nums = [5, 10, 20, 5, 30, 40];

// Output
// 100
$number = 0;
foreach ($nums as $n) {
    if ($n <= 5) {
        continue;
    }
    $number = $number + $n;
}
echo $number;

// assignment 6 


$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
//   [4] => E
//   [5] => @
//   [6] => @
//   [7] => @
//   [8] => @
//   [9] => @
// )
array_push($chars, $char[$zero], $char[$zero], $char[$zero], $char[$zero], $char[$zero]);

echo "<pre>";
print_r($chars);
echo "</pre>";


// assignment 7


$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// Write Line Here
next($names);
// Write Line Here
next($names);

echo current($names) . "<br>"; // "Sayed"

// Write Line Here
end($names);

echo current($names) . "<br>"; // "Ali"

// Write Line Here
reset($names);

echo current($names) . "<br>"; // "Osama"

// Write Line Here
end($names);
// Write Line Here
prev($names);

echo current($names) . "<br>"; // "Mahmoud"


// assignment 8

$chars = ["A", "B", "C"];

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )

// $chars[] = "D";  1 
// array_push($chars, "D");  2 
// array_merge($chars, ["D"]); 3
echo "<pre>";
print_r(array_replace($chars, [3 => "D"])); // 4
echo "</pre>";



// assignment 9

$nums = [1, 2, 3, 4, 5, 6];

// Output
// Array
// (
//   [0] => 2
//   [1] => 3
//   [2] => 4
// )
echo "<pre>";
print_r(array_slice($nums, -5, -2));
echo "</pre>";

echo "<hr>";
// assignment 10


$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// Write Your Code Here
$array_one = array_splice($mix, false, count($nums));
$array_two = array_slice($mix, count($nums), count($nums));
$array_three = array_merge($array_one, $nums);

echo "<pre>";
print_r(array_merge($array_three, $array_two));
echo "</pre>";

// Output
// Array
// (
//   [0] => 1
//   [1] => 2
//   [2] => 3
//   [3] => 4
//   [4] => 5
//   [5] => 6
//   [6] => 7
//   [7] => 8
//   [8] => 9
// )


// assignment 11 

$arr = ["A", "B", "C", "D", "E"];

// Output
// 5
$count = 0;
foreach ($arr as $a) {
    $count++;
}
echo $count;


// assignment 12 

$nums = [11, 2, 10, 7, 20, 50];

// Output
// 100 
$number = 0;
foreach ($nums as $num) {
    $number += $num;
}
echo $number;


echo "<hr>";
// assignment 13 

$nums = [10, 100, -20, 50, 30];

// Output
// 100

$numbers = $nums[0];
foreach ($nums as $num) {
    if ($num > $numbers) {
        $numbers = $num;
    }
}

echo $numbers;


// assignment 14


$nums = [10, 100, -20, 50, 30];

// Output
// -20

$number = $nums[0];

foreach ($nums as $num) {
    if ($num < $number) {
        $number = $num;
    }
}

echo $number;


// assignment 15 

$chars = ["o", "r", "e", "z", "l", "E"];

// Output
// "Elzero"

$reverse = [];
$total = count($chars);
for ($i = --$total; $i >= 0; $i--) {
    $reverse[] =  $chars[$i];
}
foreach ($reverse as $r) {
    echo $r;
}


// assignment 16 

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )
$new = [];
foreach ($mix as $m) {
    if (is_int($m) && $m % 2 != 0) {
        $new[] = $m;
    }
}
echo "<pre>";
print_r($new);
echo "</pre>";


// assignment 17 

$nums = [1, 2, 3, 4, 5, 6];

// Output
// Every Time The Array Elements Will Be Shuffled

// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )

$nums = [1, 2, 3, 4, 5, 6];

$totalNums = count($nums); // get the number of array

for ($i = $totalNums - 1; $i > 0; $i--) {
    $randomIndex = mt_rand(0, $i); // get random index number // say => 4 

    if ($randomIndex != $i) { // if != 5 

        $temp = $nums[$randomIndex]; // make variable temp and value 4

        $nums[$randomIndex] = $nums[$i]; // 6

        $nums[$i] = $temp; // 5
    }
}

print_r($nums);


// assignment 18


$title = "E&z\$r0 W\$b Sch00&";

// Output
// "Elzero Web School"
// 7
echo $title . "<br>";
echo str_replace(["&", "\$", "$", "0"], ["l", "e", "r", "o"], $title, $count) . "<br>";
echo $count;