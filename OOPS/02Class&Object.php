<?php




class mobile
{
    function call()
    {
        echo "Call";
    }
    function sms()
    {
        echo "sms";
    }
    function browser()
    {
        echo "browser";
    }
    function music()
    {
        echo "music";
    }
    function video()
    {
        echo "video";
    }
    function game()
    {
        echo "game";
    }
    function photos()
    {
        echo "photos";
    }
}

$myphone = new mobile;

$myphone->call();
echo "<br>";
$myphone->sms();
echo "<br>";
$myphone->game();
echo "<br>";

// call();
// sms();
// game();






?>