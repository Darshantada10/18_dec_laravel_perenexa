<?php


// Array is a group of similar/ different elements in a contiguious memory

//Index Array (Numeric Key/Index)
echo "<pre>";
$arr = array(1,2,3,"welcome","perenexa",true,false,76,null,1.20,0);

print_r($arr);
// echo $arr[7];

foreach ($arr as $kuchbhi => $something) 
{
    echo"Key is $kuchbhi and value is $something <br> ";
}

// Associative Array it can hold numeric and alpha numeric as key as user defined
$associative_array = ["name"=>"darshan","age"=>24,"city"=>"ahmedabad","personal_phone"=>9755984681,"hobby"=>"cricket",45,"company"=>"perenexa",89,"office_number"=>9958985985];

print_r($associative_array);
echo $associative_array['name'];
echo "<br>";
echo $associative_array['city'];
echo "<br>";
foreach ($associative_array as $key => $value) 
{
    echo"Key is $key and value is $value <br> ";
}




//Multi-Dimensional Array


    $earth = array(
        "Continent"=> array(
            "Country"=> array(
                "City"=> array(
                    "Area"=> array(
                        "Society"=> array(
                            "101"=> array(
                                "Humans"=> array(
                                    "Jahan",
                                    "Mohammed"
                                )
                            )
                        )
                    )
                )                                       
            )
        )
    );
    print_r($earth);


    $dps = array(
        "10th_Standard"=> array(
            "Jahan"=> array("sports"=>99,"English"=>105,"Hindi"=>99),
            "Mohammed"=>array("Sports"=>98,"English"=>110,"Hindi"=>98)
        ),
        "11th_Standard"=> array(
            "Science"=> array(
                "Student1"=>array("s1"=>100,"s2"=>500,"s3"=>1000)
            ),
            "Commerce"=> array(
                "Student2"=>array("c1"=>100,"c2"=>500,"c3"=>1000)
            ),
            "Arts"=> array(
                "Student3"=>array("a1"=>100,"a2"=>500,"a3"=>1000)
            )
        )
    );

    print_r($dps);

?>