<?php


// There are 2 Types of Company
// 1. Product Based  - Amazon Flipkart Netflix Urban Clap Facebook Instagram Zomato Swiggy
// 2. Service Based  - Urban Clap TCS Mackansey Zomato Swiggy IBM  Google
    // Product Based (Most Earning Less Learning)
    // Serivce Based (Less Earning Most Learning)





// $array = array();
$array = ["Laravel","PHP","Ahmedabad",5,5,"Laravel","ahmedabad"]; // after php 5.4

echo "<pre>";
print_r($array);

print_r(array_count_values($array));

echo "<br>";
print_r(count($array));
echo "<br>";
print_r(sizeof($array));
echo "<br>";



?>