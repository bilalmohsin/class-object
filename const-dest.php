<?php
class Car{
    public $name,$model;
    function __construct($name,$model){ // Create constructor which is automatically called when object created
        $this->name=$name;
        $this->model=$model;
    }
    function get_name(){
        return $this->name;
    }
    function get_model(){
        return $this->model;
    }
    function __destruct(){ // Create destructor which is automatically called at end of object destroy
        echo "The name of car is {$this->name} and its model is {$this->model}.";
    }
}
$a = new Car("Toyota","1994");
echo $a->get_name()."<br>";
echo $a->get_model()."<br>";




?>