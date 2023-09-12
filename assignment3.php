<?php

// assignment1 
$name = "Elzero Courses";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<? echo $name ?>">
    <title>Welcome To
        <? echo $name ?>
    </title>
</head>

<body>
    <h1>
        <? echo $name ?>
    </h1>
    <p>Here In
        <? echo $name ?> We Provide Front-End And Back-End Courses
    </p>
    <hr>
    <div>
        <? echo $name ?> Is The What You Need.
    </div>
    <footer>All Right Reserved To
        <? echo $name ?>
    </footer>
</body>

</html>

<?php

// assignment 2 

$var = "elzero";
$$var = "Web";

echo $elzero . "<br>";
echo $$var . "<br>";
echo ${$var} . "<br>";
echo "${$var}" . "<br>";
echo "${elzero}" . "<br>";


// assignment 3 

$a = 200;
$b = &$a;
$a = 100;

echo $b . "<br>"; // 100

//  assignment 4 

// "C:/xampp/htdocs"
// "localhost"
// "C:\WINDOWS"
// "C:/xampp/apache/bin/openssl.cnf"
echo $_SERVER["DOCUMENT_ROOT"] . "<br>";
echo $_SERVER["HTTP_HOST"] . "<br>";
echo getenv('SystemRoot') . "<br>";
echo $_SERVER["OPENSSL_CONF"] . "<br>";


// assignment 5 

/*
  for
  do
  while
  if
  foreach
  switch
  break 
  continue
  final 
  or 
  and
*/


// assignment 7 

echo __LINE__ . "<br>";
echo __DIR__ . "<br>";
echo __FILE__ . "<br>";
