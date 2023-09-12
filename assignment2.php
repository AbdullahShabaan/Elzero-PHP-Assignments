<?php
// assignment 1
echo (int)(15.2 + 14.7 + (10.5 + 10.5)) . "<br>"; // 50
echo gettype((int)(15.2 + 14.7 + (10.5 + 10.5))) . "<br>"; // Integer

// assignment 2 

$number = 100;
gettype($number); // Method One
var_dump($number) . "<br>"; // Method Two
echo (is_int($number) ? "integer" : (is_string($number) ? "string" : (is_float($number) ? "float" : "none"))); // Method Three => Optional


// assignment 3 
// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"

echo "  Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"  ";


// assignment 4 
// Needed Output
// We
// Love
// Elzero
// Web
// School

echo nl2br("We 
Love 
Elzero 
Web 
School");



// assignment 5 

// Needed Output
// Hello "'Elzero'"
// We Love $Programming$
// Languages Specially "PHP"
echo nl2br(
    <<< 'Now'
Needed Output
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
Now
);




// assignment 6 

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
// Hello \PHP\ We Love Programming
$something = "Programming";

echo <<< "code"
Hello \PHP\
We Love $something
code;



// assignment 7 

// Needed Output
// 1
// integer

echo "Hello PHP" || false;
echo '<br>';
echo gettype(intval("Hello PHP"));


// assignment 8 

$array = ["frontend" =>
["HTML", "CSS", "JS" =>
["vuejs" =>
["v2", "v3"], "react", "svelte"]], "backend" =>
["php", "mysql", "security"], "git", "github", "testing" =>
["Unit Testing", "end to end", "integration"]];
echo "<pre>";
print_r($array);
echo "</pre>";

// Array
// (
//   [FrontEnd] => Array
//     (
//       [0] => HTML
//       [1] => CSS
//       [JS] => Array
//         (
//           [Vuejs] => Array
//             (
//               [2] => v2
//               [3] => v3
//             )

//           [0] => Reactjs
//           [1] => Svelte
//         )
//     )

//   [BackEnd] => Array
//     (
//       [0] => PHP
//       [1] => MySQL
//       [2] => Security
//     )

//   [0] => Git
//   [1] => Github
//   [Testing] => Array
//     (
//       [0] => Unit Testing
//       [1] => End To End
//       [2] => Integration
//     )
// )