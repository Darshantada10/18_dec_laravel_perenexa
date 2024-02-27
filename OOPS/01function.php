<?php




/*
    A = Atomicity
    C = Consistency
    I = Isolation
    D = Durability



    D = Don't
    R = Repeat
    Y = Yourself

*/



function message()
{
    echo "Good Morning! Welcome To Coding<br>";
}

function calc($a,$b)
{
    echo $a + $b."<br>";
}

message();
message();

$num1 = 20;
$num2 = 70;
calc($num1,$num2);
calc(20,30);
calc(10,30);
calc(30,30);
calc(40,30);
calc(50,30);


// echo 10+20;
// echo 10+20;
// echo 10+20;
// echo 10+20;
// echo 10+20;
// echo 10+20;
// echo 10+20;












?>