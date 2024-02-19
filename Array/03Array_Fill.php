<?php

echo "<pre>";


$a = array_fill(0,50,"something");

// print_r($a);

$array = ["Perenexa","S.G. Highway","Ahmedabad","Gujarat","India"];
$new_array = array_pad($array,10,"PHP");
print_r($array);
print_r($new_array);




?>