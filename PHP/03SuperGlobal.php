<?php

// 1. Practice
// 2. Reserach & Development
// 3. Debugging


echo "<pre>";

// this is informative super global 

// $_ENV = getenv();
// it shows information about our cpu or environment
// echo $_ENV;
// print_r($_ENV);
// echo $_ENV['USERNAME'];

// it shows information about our server and browser
// print_r( $_SERVER);
// echo  $_SERVER['HTTP_ACCEPT'];
// echo "<br>";
// echo  $_SERVER['PHP_SELF'];


// it shows data from the url
// it is less secure 
// it is fast
// print_r( $_GET );

// it takes data directly from submitted form
// it is safe but slow compared to get
// print_r($_POST);

// it is all rounder
// it will work for both methods get and post method of form tag

if (isset($_REQUEST['submit']))
{
    print_r($_REQUEST);
    
    if ($_FILES['profile']['name'] != null)
    {
        print_r($_FILES);
    }
}




// print_r($_FILES);



// echo "</pre>";

// $name = false;

// var_dump($name);

// if(isset($name))
// {
//     echo "success , inside if";
// }
// else 
// {
//     echo "inside else";
// }



// Data Setter
    print_r( $_COOKIE);


    // if($_COOKIE['course'] == "php")
    // {
    //     echo "you are a php student";
    // }
    // else if($_COOKIE['course'] == "python")
    // {
    //     echo "you are a python student";
    // }
    // else if($_COOKIE['course'] == "js")
    // {
    //     echo "you are a js student";
    // }
    // else
    // {
    //     echo "you are other technology student";
    // }
echo "<br>";
if(isset($_COOKIE['name']))
{
    echo "welcome ".$_COOKIE['name'];
}
echo "<br>";
if(isset($_COOKIE['course']))
{
    echo " your technology is  ".$_COOKIE['course'];
}
?>

<!-- this is asked in an interview and it's functionality -->
<!-- Anything that starts with $ is always a variable  -->
<!-- It is case sensitive -->
<!-- it always starts with _ except GLOBALS -->
<!-- It is pre defined variable so you cannot use it anywhere else -->



<!-- <h1>Informative Super Global</h1>
<h2>$_ENV</h2>
<h2>$_SERVER</h2>


<h1>Data Receiver Super Global</h1>
<h2>$_GET</h2>
<h2>$_POST</h2>
<h2>$_REQUEST</h2>
<h2>$_FILES</h2>
<h2>$GLOBALS</h2>


<h1>Data Setter / Storage</h1>
<h2>$_COOKIE</h2>
<h2>$_SESSION</h2> -->



<!-- <form action="" method="get">

<input type="text" name="username">
<input type="password" name="password">
<input type="text" name="mobile">
<input type="text" name="name">
<button>Submit</button> -->

<form action="" method="post" enctype="multipart/form-data">

<input type="text" name="username">
<input type="password" name="password">
<input type="text" name="mobile">
<input type="text" name="name">
<input type="file" name="profile">
<button name="submit">Submit</button>
</form>