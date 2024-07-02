<?php
/*
class Greeting{
    public static function  Message(){
        echo "Hello! How are you";
    }
}
// Call static method
Greeting :: Message();

class Greeting{
    public static function Message(){
        echo "Hello how are you";
    }
    //Call the static method inside the other method
    public function __construct(){    
        self::Message();
    }
}
$a = new Greeting();

// Call static method of one class into another class
class A{
    public static function message(){
        echo "Hello";
    }
}
class B{
    public function welcome(){
        A :: message();
    }
}
$a = new B();
$a->welcome();
*/
/* To call a static method from a child class, use the parent keyword inside the child class. 
Here, the static method can be public or protected.*/
class Domain{
    protected static function getDomain(){
        return "www.google.com";
    }
}
class Subdomain extends Domain{
    public $name;
    public function __construct(){
        $this->name = parent :: getDomain();
    }
}
$a = new Subdomain();
echo $a->name;
?>