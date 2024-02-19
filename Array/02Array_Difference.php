<?php



$team_iron_man = ["a"=>"Iron Man","b"=>"Black Panther","c"=>"Black Widow","d"=>"SpiderMan"];

$team_cap = ["a"=>"Captain America","b"=>"Bucky","c"=>"Falcon","d"=>"Hakweye","e"=>"Black Widow"];

echo "<pre>";

print_r($team_iron_man);
print_r($team_cap);

$marvel = array_diff($team_cap,$team_iron_man);


print_r($marvel);






?>