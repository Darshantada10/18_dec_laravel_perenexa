<?php


// it is a conditional statement

// else part is not compulsory



// if(10>2)
// {
//     echo "true";
// }
// else
// {
//     echo "false";
// }


// if(1>2)
// {
//     echo "true";
// }

//nested if else/ ladder if else
// if(1>2)
// {
//     if(5>2)
//     {
//         echo "true";
//     }
// }
// else
// {
//     echo "false";
// }

// else if
// if first condition is true then it will not check other condition and exit from there

if(5>20)
{
    echo "true by if 1st line";
}
else if(10>20)
{
    echo "true by else if 2nd line";
}
else if(4>20)
{
    echo "true by another else if in 3rd line";
}
else
{
    echo "false";
}


$besan = true;
$ingridents = true;
$eater = true;
$cook = true;
$weather = true;


if($weather)
{
    if($cook)
    {
        if($eater)
        {
            if($ingridents)
            {
                if($besan)
                {
                    echo "Pakode";
                }
                else
                {
                    echo "no besan";
                }
            }
            else
            {
                echo "no saman";
            }
        }
        else
        {
            echo "no eater";
        }
    }
    else
    {
        echo "no cook";
    }
}
else
{
    echo "no weather";
}



$age = 18;
if($age>0 && $age<5)
{
    echo "you can drink milk";
}
else if($age>5 && $age<10)
{
    echo "you can drink water";
}
else if($age>10 && $age<18)
{
    echo "you can drink soft drinks";
}
else if($age>=18)
{
    echo "you can drink beer";
}
else
{
    echo "you are not eligible";
}


?>


<!-- 
        try all if else patterns
        q-1 marking system
        q-2 check his age and give permission
        q-3 menu
 -->