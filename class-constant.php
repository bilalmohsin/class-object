<?php
class Greeting{
    const GREET = "Hello! how are you";
    function hows(){
        echo self::GREET;
    }
}
echo Greeting::GREET."<br>";
$a = new Greeting();
$a->hows();





?>