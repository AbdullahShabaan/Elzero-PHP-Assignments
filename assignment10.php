<?php

// assignment 1 
// Example
// 13
// 14
// 19
// 12
echo rand(11, 19);


// assignment 2 

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

// Example
// Ibrahim
// Ahmed
echo $friends[mt_rand(0, 3)];


// assignment 3 

$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7

echo round($num1, 0, PHP_ROUND_HALF_DOWN) . "<br>";
echo round($num2, 1) . "<br>";
echo round($num3, 0, PHP_ROUND_HALF_ODD) . "<br>";


// assignment 4 


$keys = [];
$values = [];
$list = filter_list();
foreach ($list as $l) {
    $keys[] = filter_id($l);
    $values[] = $l;
}
$array = array_combine($keys, $values);

echo "<pre>";
print_r($array);
echo "</pre>";


// assignment 5 

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

// Output
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"


if (filter_var($url1, FILTER_VALIDATE_URL)) {
    echo "Valid URL";
} else {
    echo "Not A Valid URL" . "<br>";
}

if (filter_var($url2, FILTER_VALIDATE_URL)) {
    echo "Valid URL";
} else {
    echo "Not A Valid URL" . "<br>";
}

if (filter_var($url3, FILTER_VALIDATE_URL)) {
    echo "Valid URL" . "<br>";
} else {
    echo "Not A Valid URL" . "<br>";
}

if (filter_var($url4, FILTER_VALIDATE_URL)) {
    echo "Valid URL";
} else {
    echo "Not A Valid URL" . "<br>";
}


// assignment 6 

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

// Output
// http: //www.elzero.org
// http: //elzero.org
// https: //elzero.org
// https://elzero.org

echo filter_var($url1, FILTER_SANITIZE_URL) . "<br>";
echo filter_var($url2, FILTER_SANITIZE_URL) . "<br>";
echo filter_var($url3, FILTER_SANITIZE_URL) . "<br>";
echo filter_var($url4, FILTER_SANITIZE_URL) . "<br>";