<?php

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
print_r($_REQUEST);


print_r($_FILES);








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
<button>Submit</button>
</form>