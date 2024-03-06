<?php

// Encapsulation is wrapping of data in a single unit
// Encapsulation in programming means bundling data and methods into a single unit(class),hiding internal details and providing controlled access through object 


// remember biryani example & phone wala example - youtube 

class doraemonPocket
{
    public function parrot()
    {
        echo "Parrot<br>";
    }
    public function gadget()
    {
        echo "Gadget<br>";
    }
    public function rabbit()
    {
        echo "Rabbit<br>";
    }
    public function sword()
    {
        echo "Sword<br>";
    }
    public function flowers()
    {
        echo "Flowers<br>";
    }
    public function popcorn()
    {
        echo "popcorn<br>";
    }
    public function clothes()
    {
        echo "clothes<br>";
    }
}

$nobita = new doraemonPocket;

$nobita->gadget();
$nobita->clothes();
$nobita->popcorn();
$nobita->flowers();





?>