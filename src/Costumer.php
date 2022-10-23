<?php 
namespace Autoload\Belajar;

class Costumer
{
    function __construct(private string $name)
    {
        
    }

    function sayHello(string $name = "Guest"){
        echo "Hello $name, my name is $this->name";
    }
}
?>