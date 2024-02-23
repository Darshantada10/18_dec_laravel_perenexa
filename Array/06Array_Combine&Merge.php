<?php 







// array();
$name = ["a"=>"Iron Man","b"=>"Captain America","c"=>"Thor","d"=>"Hawk Eye","Hulk","Black Widow"];

$age = ["a"=>50,"b"=>150,"c"=>1500,"d"=>50,"e"=>"899",566];

echo "<pre>";
print_r($name);
print_r($age);

$array_combine = array_combine($name,$age);

print_r($array_combine);

echo "<br>";

$array_merge = array_merge($age,$name);

print_r($array_merge);


echo "<br>";

    $recursive = array_merge_recursive($name,$age);
    print_r($recursive);
?>