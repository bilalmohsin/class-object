<?php
/*
abstract class Car{
    public $name;
    public function __construct($name){
        $this->name=$name;
    }
    abstract public function intro() : string;
}
class Audi extends Car{
    public function intro() : string {
        return "Hello! The name of car is $this->name";
    } 
}
class Volvo extends Car{
    public function intro() : string {
        return "Hey! The name of car is $this->name";
    }
}
class Bard extends Car{
    public function intro() : string {
        return "Woo! The name of car is $this->name";
    }
}
$a = new Audi("Audi");
echo $a->intro()."<br>";
$b = new Volvo("Volvo");
echo $b->intro()."<br>";
$c = new Bard("Bard");
echo $c->intro()."<br>"; 

abstract class Name{
    public $name;
    abstract protected function prefixName($name);
}
class myName extends Name{
    public function prefixName($name){
        if($name == "Jhon"){
            $prefix = "Mr .";
        } elseif($name == "Jane"){
            $prefix = "Mrs .";
        } else {
            $prefix = " ";
        }
        return "{$prefix} {$name}";
    }
}
$a = new myName();
echo $a->prefixName("Jhon")."<br>";
echo $a->prefixName("Jane") 

 abstract class Addition{
    public $num1;
    // Abstract method with an argument
    abstract protected function Add($num);
 }
class Sum extends Addition{
    public function Add($num){
        if($num > 0 && $num < 100 ){
            if($num % 2 == 0){
                echo "The entered number is Even";
            } else {
                echo "The entered number is Odd";
            }
        }
        else {
            echo "The given number is greater than one hundred";
        }
    }
}
$a = new Sum();
$a->Add(89); */
abstract class Fruit{
    public $name;
    // Abstract method with an argument
    abstract protected function fruitName($name);
}
class Apple extends Fruit{
    public $color,$weight;
    // The child class may define optional arguments that are not in the parent's abstract method
    public function fruitName($name,$color = "Red",$weight = "2Kg"){
        return "{$name}, {$color}, {$weight}";
    }
}
$a = new Apple();
echo $a->fruitName("Apple");
?>