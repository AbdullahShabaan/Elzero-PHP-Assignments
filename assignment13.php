<?php
// assignment 1
setcookie("layout", "boxed", time() + 60 * 60 * 24 * 40 * 2 + (60 * 60 * 24 * 2));
setcookie("font", "swat", time() + 60 * 60 * 24 * 40 * 2 + (60 * 60 * 24 * 2));
setcookie("color", "blue", time() + 60 * 60 * 24 * 40 * 2 + (60 * 60 * 24 * 2));
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";


// assignment 2
echo "Your Color Is {$_COOKIE['color']} And Your Font Is {$_COOKIE['font']}";


// assignment 3 
setcookie("layout", "boxed", time() - 1);
setcookie("font", "swat");
setcookie("color", "blue");
