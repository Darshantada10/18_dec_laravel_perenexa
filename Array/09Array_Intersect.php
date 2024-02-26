<?php



$color1 = ["a"=>"red","b"=>"yellow","c"=>"white","d"=>"blue","orange"];
$color2 = ["e"=>"orange","f"=>"white","g"=>"green","d"=>"blue","Black","orange"];

echo "<pre>";

print_r(array_intersect($color1,$color2));
print_r(array_intersect_assoc($color1,$color2));
print_r(array_intersect_key($color1,$color2));






?>