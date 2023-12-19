<?php


// echo "this is line print with the help of php";
// echo is a function used to print anything in php

// rules for variable
// it starts with $ sign
// 1. you can directly declare it without any datatype
// 2. it always start with $ sign
// 3. the variable name cannot start with number or any special character
// 4. except underscore     
// 5. you can use number in between or end but cannot start with number
// 6. it will overwrite
// 7. that is why it is called loosely typed language


$value_of_price;
$_check;


$name1 = 1;
$name1 = 1.1;
$name3 = 'hey';
$name4 = true;
$name5 = false;
$name6 = [1,2];

$name = "jahan";
$language = "php";
$price = 100;

echo "Hello $name welcome to the lecture of $language";
echo "<br>";
echo 'Hello $name welcome to the lecture of $language';


echo "<br>";

// it is called concatination
echo "Welcome to the shop $name the book you purchase it's price is ". ' $price '. $price;
echo "<br>";
echo "Welcome to the shop $name the book you purchase it's price is ", ' $price ', $price;



echo "<br>";
echo $name;


?>

<!-- 
<h1>This is a lecture about variable</h1>

<h2>The Backend code or server side code is directly executed</h2> -->