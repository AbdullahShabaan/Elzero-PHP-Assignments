<?php
// assignment 1
echo round(disk_total_space("C:") / 1024 / 1024 / 1024 / 1024, 2) . "<br>";
echo round(disk_total_space("E:") / 1024 / 1024 / 1024 / 1024, 2) . "<br>";
echo "<hr>";


// assignment 2

echo ceil(filesize("E:/ju/five.mp4") / 1024 / 1024) . "<br>";
echo ceil(filesize("E:/ju/five.mp4") / 1024);
echo "<hr>";


// assignment 3 
mkdir("programming", 0117);
mkdir("programming/php", 0117);

if (file_exists("programming/php")) {
    rmdir("programming/php");
    echo "Directory Programming/PHP Removed" . "<br>";
}

if (file_exists("programming")) {
    rmdir("programming");
    echo "Directory Programming Removed" . "<br>";
}


// assignment 4 

function change_permissions($file_name)
{
    $name = explode('.', basename($file_name));
    if (is_dir($file_name)) {
        echo "This Is Directory And Only Files Allowed"  . "<br>";
    } elseif ($name[1] == "txt") {
        chmod($file_name, 0711);
        echo "“Permissions Changed”" . "<br>";
    } else {
        echo "File Extension Is Not Txt" . "<br>";
    }
}

change_permissions("tt.txt");

// assignment 5 

// Output

// "index.php"
// "index.php"
// "index.php"
// "index.php"

echo basename(__FILE__) . "<br>";
echo pathinfo(__FILE__)["basename"] . "<br>";
echo basename($_SERVER['PHP_SELF']) . "<br>";
echo basename($_SERVER['SCRIPT_NAME']) . "<br>";


// assignment 6 

// elzero.txt Content
// Hello Elzero Web
// School
// No Need To Read

// Needed Output
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"

$handle = fopen("elzero.txt", 'r+');
echo fgets($handle);
echo fgets($handle);
fclose($handle);

echo "<hr>";
echo file_get_contents("elzero.txt", true, null, 0, 25);
echo "<hr>";

$file = file("elzero.txt");
echo $file[0] . $file[1];
echo "<hr>";


// assignment 7 

// elzero.txt Content
// Hello Osamaa Web
// School

// elzero.txt New Content
// Hello Elzero Web
// School

file_put_contents("elzero2.txt", "Hello Elzero Web
School");
