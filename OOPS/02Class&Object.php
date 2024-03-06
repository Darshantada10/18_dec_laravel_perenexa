<?php

// Class is a blueprint for creating objects. it defines the structure and behaviour of all common instance of class 
// A blueprint or template that defines the properties and behaviour of common to a group of objects
// Class is blueprint

// A class is like a recipe book . it tells you what ingredients you need to cook something along with the steps
// Remember Mobile Example


// An instance of class
// An instance of class that represents a specific entity or concept , with it's own data and behaviour
// An instance of class. it encapsulates data and behavioiur according to the blueprint defined by it's class

// An object is like one specific dish(item) that you use in recipe class or cooking at home. but common thing is you use the same recipe book




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