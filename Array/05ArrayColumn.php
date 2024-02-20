<?php

// Debug is used for self only
// debug is for understanding the data and viewing the output for ourselves
// it is not for user
echo "<pre>";


$marks =    
array(
            array(
                'id'=>1,
                // 'name'=>array(4),
                'name'=>"Jahan",
                'marks'=>99,
            ),

            array(
                'id'=>2,
                'name'=>"Mohammed",
                'marks'=>99,
            ),
            array(
                'id'=>3,
                'name'=>"Kohli",
                'marks'=>99,
            ),
            array(
                'id'=>4,
                'name'=>"Dhoni",
                'marks'=>99,
            )

);

print_r($marks);

echo $marks[0]['name'];
echo "<br>";

// for($i=0;$i<=2;$i++)
// {
//     echo $marks[$i]['name'];
//     echo "<br>";
    
// }



foreach ($marks as $kuchbhi => $something) 
{
        // echo $something['name'];
        // print_r($kuchbhi);
        // print_r($something);
        // echo "<br>";

        $student[] = $something['name'];
}

print_r($student);

    // print_r(array_column($marks,'name'));
    $names = array_column($marks,'name');

    // echo $names;
    foreach ($names as $key => $value) 
    {
        echo $value . "<br>";
    }
?>