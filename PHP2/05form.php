
<!-- 
    action blank means the data will be submitted on the same page
    if action is defined for another page then it will perform that specific action in that page
    there are two method type
    1 get(it will show data in url)
        shararat wala friend
        ? (query string)
        name = value
        & (multiple value and names)
        name = value

        Limitation 

        get method has limitation
        it cannot carry file
        all data is visible in url so it is not safe
        2048 characters

        Benefit of get method

        it is faster than post method


    2 post (it will submit data)
        best friend (secrative)
        
        it will directly submit all the data to database

        Benefits

        secure
        you can send file
        it has no limitation to data

        Limitation

        it is slower than get method

    for input tag name attribute is required
    name should be unique
 -->
<form action="" method="post">

<input type="text" name="username">
<input type="password" name="password">
<input type="email" name="email">

<button type="submit">Submit</button>


</form>


<?php


print_r($_REQUEST);


?>