<?php
class Car{
    public $name,$model;    //Public properties
    // Public Function/Method
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
} 
$a = new Car();  // Create object of Car class
$a->set_name("Toyota"); // Call to the set_name() method and set the value
echo $a->get_name();    // Call to the get_name() method and get the value
?>
