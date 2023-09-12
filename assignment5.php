<?php

$a = 100;
$b = 200;
$c = 100;

/*
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/

echo $b > $a && $a === $c && ($a + $c) == $b ? "yes" : "";

echo "<hr>";
// assignment 2 

// Test Case 1
$a = 300;
$b = 200;
$c = 300;

switch ($a) {
    case $a > $b:
        echo "A is larger than b";
        break;
    case $a > $c:
        echo "A is larger than c";
        break;
    default:
        echo "A Is Not Larger Than B Or C";
}



echo "<hr>";
// assignment 3

$admins = ["Osama", "Ahmed", "Sayed"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "The Request Method Is Post And Username Is " . $_POST["user"] . "<br>";

    if (in_array($_POST["user"], $admins)) {
        echo "This Username " . $_POST["user"] . " Is Admin";
    }
}

?>
<form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
</form>



<?php




// assignment 4
$a = 30;
$b = 20;
$c = 10;

echo ($a + $b === $c ? "A + B = C" : ($a + $c === $b ?  "A + C = B" : ($b + $c === $a ? "B + C = A" :  "The End")));

// if ($a + $b === $c) {

//   echo "A + B = C";

// } elseif ($a + $c === $b) {

//   echo "A + C = B";

// } elseif ($b + $c === $a) {

//   echo "B + C = A";

// } else {

//   echo "The End";

// }

// // Output
// "B + C = A"



// assignment 5
// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"

$name = "Osama";
$age = 40;
$country = "Egypt";

// if ($age > 18) {
//     echo "The Age Is Good To Go<br>";
//     if (gettype($name) === "string") {
//         echo "The Name Is Good To Go<br>";
//         if ($country === "Egypt") {
//             echo "The Country Is Good To Go<br>";
//         }
//     }
// }
echo $age > 18 && gettype($name) === "string" && $country === "Egypt" ? "The Age Is Good To Go <br> The Name Is Good To Go <br> The Country Is Good To Go<br>" : "";



// assignment 6 

$genre = "Hack And Slash";

switch ($genre) {
    case $genre === "RPG":
        echo "I Recommend Ys Games";
        break;
    case $genre === "Hack And Slash":
        echo "I Recommend Castlevania Games";
        break;
    case $genre === "FPS":
        echo "I Recommend Uncharted Games";
        break;
    case $genre === "Platform":
        echo "I Recommend Megaman Games";
        break;
    case $genre === "Puzzle":
        echo "I Recommend Megaman Games";
        break;
    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
}

// if ($genre === "RPG") {

//   echo "I Recommend Ys Games";

// } elseif ($genre === "Hack And Slash") {

//   echo "I Recommend Castlevania Games";

// } elseif ($genre === "FPS") {

//   echo "I Recommend Uncharted Games";

// } elseif ($genre === "Platform") {

//   echo "I Recommend Megaman Games";

// } elseif ($genre === "Puzzle") {

//   echo "I Recommend Megaman Games";

// } else {

//   echo "I Recommend Shadow Of Mordor And Shadow Of War";

// }

// Needed Output
// "I Recommend Castlevania Games"





// assignment 7 

$num_one = 23;
$num_two = 5;
$op = "/";

if ($op == "+") {
    echo $num_one + $num_two;
} elseif ($op == "-") {
    echo $num_one - $num_two;
} elseif ($op == "*") {
    echo $num_one * $num_two;
} elseif ($op == "/") {
    // echo $num_one / $num_two;
    echo (int)($num_one / $num_two) . "<br>";
    echo $num_one % $num_two;
} else {
    echo "Unknown Operation";
}





// assignment 8 
$day = "Sat";

// switch($day) {
//   case "Sat":
//   case "Sun":
//   case "Mon":
//     echo "We Are Open All The Day";
//     break;
//   case "Tue":
//   case "Wed":
//     echo "We Are Open From 08:12";
//     break;
//   case "Thu":
//   case "Fri":
//     echo "We Are Closed";
//     break;
//   default:
//     echo "Unknown Day";
// }

if ($day == "Sat" || $day == "Sun" || $day == "Mon") {
    echo "We Are Open All The Day";
} elseif ($day == "Tue" || $day == "Wed") {
    echo "We Are Open From 08:12";
} elseif ($day == "Thu" || $day == "Fri") {
    echo "We Are Closed";
} else {
    echo  "Unknown Day";
}
