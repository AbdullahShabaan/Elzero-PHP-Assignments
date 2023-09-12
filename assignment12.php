<?php
// assignment 1 

date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get() . "<br>";
echo date("D , d M y - H:i:s a") . "<br>";
echo date("l , d F Y - H:i:s a") . "<br>";

// assignment 2 

$date = "2005-10-02";

// Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:15"

date_default_timezone_set("africa/cairo");
echo date_default_timezone_get() . "<br>";
$d = date_create($date);
date_add($d, date_interval_create_from_date_string("15 hours , 15 min , 15 seconds"));
echo date_format($d, "Y , F , l  'S' H : i : s ");

echo "<hr>";



// assignment 3 
$date = "1990-10-01";
$date2 = "2023-9-12";

$timestamp1 = strtotime($date);
$timestamp2 = strtotime($date2);

$diffInSeconds = abs($timestamp2 - $timestamp1);
$diffInMinutes = round($diffInSeconds / 60);
$diffInHours = round($diffInSeconds / 3600);
$diffInDays = round($diffInSeconds / 86400);
$diffInMonths = round($diffInSeconds / (86400 * 30));
$diffInYears = round($diffInSeconds / (86400 * 365)) - 1;
echo "<hr>";
// echo $diffInDays;
echo "From Epoch Time Till 1990-10-01 Is Approximately {$diffInDays} Days" . "<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately {$diffInYears} years" . "<br>";
echo "<hr>";
// assignment 4 

$date = "1990-10-01";

// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"

$old = date_create($date);
$new = date_create();
$date_diff = date_diff($old, $new);
echo "From Epoch Time Till 1990-10-01 Is Approximately $date_diff->days Days" . "<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately $date_diff->y years" . "<br>";


// assignment 5 

// With time() Function
// echo time() . "<br>"; // 1668020233

// // Output Needed With Other Ways
// 1668020233
// 1668020233
// 1668020233

$currentTime = microtime(true);
$timestamp = floor($currentTime);
echo $timestamp;
echo "<hr>";
$timestamp = $_SERVER['REQUEST_TIME'];
echo $timestamp;
echo "<hr>";
$currentDateTime = date('Y-m-d H:i:s');
$timestamp = strtotime($currentDateTime);

echo $timestamp;
