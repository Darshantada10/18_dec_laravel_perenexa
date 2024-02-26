<?php



$cars = ["audi"=>"r8","bmw"=>"x7","buggati"=>"cherron","mercedeas"=>"a-class"];

var_dump(array_key_exists("audi",$cars));

echo "<br>";
echo "<br>";
echo "<br>";

var_dump(in_array("r8",$cars));

echo "<br>";
echo "<br>";
echo "<br>";
var_dump(array_search("r8",$cars));
echo "<br>";
print_r(array_search("r8",$cars));




?>