<?php
// assignment 1
// Write Function Content Here
function greeting($name, $gender = "none")
{
    echo ($gender == "Male" ? "Hello Mr {$name} <br>" : ($gender == "Female" ?  "Hello Miss {$name} <br>" : "Hello {$name} <br>"));
}
// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh


// assignment 2 


// Write Function Content Here
function get_arguments(...$all)
{
    foreach ($all as $a) {
        echo $a . " ";
    }

    $all2 = func_get_args();
    foreach ($all2 as $a) {
        echo $a . " ";
    }
}
// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School") . "<br>"; // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP


// assignment 3 

// Write Function Content Here
function sum_all(...$parameters)
{
    $next = 0;
    $sum = 0;
    $number = func_num_args();
    for ($i = 0; $i < $number; $i++) {
        if (func_get_arg($next) == 5) {
            $sum += 0;
        } elseif (func_get_arg($next) == 10) {
            $sum += 20;
        } else {
            $sum += func_get_arg($next);
        }
        $next++;
    }
    return  $sum . "<br>";
}
// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40

// another way with foreach

function sum_all2(...$all)
{
    $sum = 0;
    foreach ($all as $n) {
        if ($n == 5) {
            continue;
        }
        if ($n == 10) {
            $n = 20;
        }
        $sum += $n;
    }
    return $sum . "<br>";
}

echo sum_all2(10, 12, 5, 6, 6, 10); // 64
echo sum_all2(5, 10, 5, 10); // 40



echo "<hr>";
// assignment 4 



// Write Function Content Here
function multiply(...$parameters)
{
    $sum = 1;
    foreach ($parameters as $number) {
        if (is_float($number)) {
            $number = intval($number);
        }
        if (is_int($number)) {

            $sum *= $number;
        }
    }
    return $sum . "<br>";
}
// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000


// assignment 5 


function check_status($a, $b, $c)
{
    // Function Code Here
    if (is_string($a) && is_int($b) && is_bool($c)) {
        if ($c == true) {
            echo "Hello {$a} , your age is {$b} , You Are Available For Hire <br>";
        } else {
            echo "Hello {$a} , your age is {$b} , You Are Not Available For Hire <br>";
        }
    }

    if (is_string($b) && is_int($a) && is_bool($c)) {
        if ($c == true) {
            echo "Hello {$b} , your age is {$a} , You Are Available For Hire <br>";
        } else {
            echo "Hello {$b} , your age is {$a} , You Are Not Available For Hire <br>";
        }
    }


    if (is_string($c) && is_int($b) && is_bool($a)) {
        if ($a == true) {
            echo "Hello {$c} , your age is {$b} , You Are Available For Hire <br>";
        } else {
            echo "Hello {$c} , your age is {$b} , You Are Not Available For Hire <br>";
        }
    }


    if (is_string($b) && is_int($c) && is_bool($a)) {
        if ($a == true) {
            echo "Hello {$b} , your age is {$c} , You Are Available For Hire <br>";
        } else {
            echo "Hello {$b} , your age is {$c} , You Are Not Available For Hire <br>";
        }
    }
}

// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"



// assignment 6


// Write Function Content Here

function calculate($num1, $num2, $proccess = "a")
{
    if ($proccess == "a") {
        echo $num1 + $num2 . "<br>";
    }
    if ($proccess == "s" || $proccess == "subtract") {
        echo $num1 - $num2 . "<br>";
    }
    if ($proccess == "m" || $proccess == "multiply") {
        echo $num1 * $num2 . "<br>";
    }
}
// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200


// assignment 7


function calculate2(int $num_one, int $num_two): float
{
    return $num_one + $num_two;
}

echo calculate2(20, 10); // 30
echo gettype(calculate2(20, 10)); // Double




// assignment 8

function Hello($name)
{
    return "Hello {$name}";
}

$message = "Hello";
echo $message("osama");





echo "<hr>";
// assignment 9 

// Write Function Content Here

// anonymous function 
$greet = function ($name) {
    return "Greetings";
};
// arrow function
$greet2 = fn () => "Greetings";
// Needed Output
echo $greet("Osama"); // Greetings
echo $greet2("Osama"); // Greetings