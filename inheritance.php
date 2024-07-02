<?php
/*
class Car{
    public $name;
    protected $model;
    public function __construct($name,$model){
        $this->name=$name;
        $this->model=$model;
    }
    function get_name(){
        return $this->name;
    }
    function get_model(){
        return $this->model;
    }
    protected function intro(){ //if function is protected then Fatal error: Uncaught Error: Call to protected method Car::intro() from global scope
        echo "The name of car is {$this->name} and its model is {$this->model}";
    }
}
class Bard extends Car{
    public $color;
    function set_color($color){
        $this->color=$color;
    }
    function get_color(){
        return $this->color;
    }
    public function message(){
        echo "The message from the derived class <br>";
        $this->intro();
    } 
}
$a = new Bard("Toyota",1994);

echo $a->get_name()."<br>";
echo $a->get_model()."<br>";
echo $a->color="Red"."<br>";
echo $a->message()
*/
//Overriding Inherited Methods. Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
// If we use final keyword at start of class then this class will not be inherted
// Simi;arly if we use final keyword at start of emthod then it will not used in derived class
class Fruit{
    public $name;
    protected $color;
    public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    public function intro(){
        echo "The name of fruit is {$this->name} and its color is {$This->color}.";
    }
}
class Apple extends Fruit{
    public $weight;
    public function __construct($name,$color,$weight){
        $this->name=$name;
        $this->color=$color;
        $this->weight=$weight;
    } 
    public function intro(){
        echo "The name of fruit is {$this->name}, color is {$this->color} and weight is {$this->weight}.";
    }
}
$a = new Apple("Apple","Red","1kg");
echo $a->intro();


?>