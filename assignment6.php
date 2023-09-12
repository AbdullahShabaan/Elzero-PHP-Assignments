<?php

// assignment 1 

$index = 10;

// Needed Output
// 10
// 9
// 8
// 7
// 6
// 5
// 4
// 3
// 2
// 1

while ($index >= 1) {
    echo $index . "<br>";
    $index--;
}

echo "<hr>";
// assignment 2 
$index = 0;

// Needed Output
// 2
// 4
// 6
// 8
// 10
// 12
// 14
// 16
// 18
// 20

while ($index <= 20) {
    if ($index % 2 == 0 && $index != 0) {
        echo $index . "<br>";
    }
    $index++;
}

echo "<hr>";
// assignment 3 

// Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382

$num = 2;
$num2 = 3;
--$num;
while ($num < 520) {
    echo $num . "<br>";
    if ($num > 1) {

        $num2 += $num2;
    }
    $num += $num2;
}

echo "<hr>";
// assignment 4 

$start = 10;
$end = 0;
$stop = 3;

// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03

for ($start = 10; $start >= 0; $start--) {
    if ($start == 3) {
        echo $end . $start;
        break;
    }
    if ($start != 10) {
        echo $end . $start .  "<br>";
    } else {
        echo $start . "<br>";
    }
}
echo "<hr>";
// assignment 5 

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

// Output
// 2
// 3
// 4

// with for loop
// ++$start;
// for ($start; $start <= 6; $start++) {
//     if (is_int($mix[$start])) {
//         echo $mix[$start];
//     }
// }

// with foreach
foreach ($mix as $m) {
    if ($mix[$start] == 1) {
        $start++;
        continue;
    } elseif (is_int($mix[$start])) {
        echo $mix[$start] . "<br>";
    }
    $start++;
}



// assignment 6 

$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

// Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"
foreach ($money as $name => $value) {
    echo "the Name is " . $name . " and i need a " . $value . " pound from him" . "<br>";
}



// assignment 7

$mix2 = [1, 2, "A", "B", "C", 3, 4];

// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"

$count_int = 0;
$count_string = 0;
foreach ($mix2 as $m) {
    if (is_int($m)) {
        $count_int++;
        echo $m . "<br>";
    } else {
        $count_string++;
    }
}
echo $count_int . " Numbers Printed" . "<br>";
echo $count_string . " Letters Ignored" . "<br>";

echo "<hr>";
// assignment 8 

$nums = [1, 13, 12, 20, 51, 17, 30];

// Output
// 6
// 10
// 15

foreach ($nums as $num) {
    if ($num % 2 == 0) {
        echo $num / 2 . "<br>";
    }
}


// assignment 9 

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

// Output
// "Sayed"
// "Osama"

for ($i = $help_num; $i < count($names); $i++) {
    echo $names[$nums[$i]] . "<br>";
}
// echo count($names);


// assignment 10 

$help_num2 = 4;
$nums2 = [2, 4, 5, 6, 10];

// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"

foreach ($nums2 as $nn) {
    echo "{$nn} + " .  $nums2[$help_num2] . " = " . $nn + $nums2[$help_num2] . "<br>";
    $help_num2--;
}
