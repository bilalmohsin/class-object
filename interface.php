<?php
interface Animal{
    public function Sound();
}
class Cat implements Animal{
    public function Sound(){
        echo " Meao <br>";
    }
}
class Dog implements Animal{
    public function Sound(){
        echo " Bark <br>";
    }
}
class Mouse implements Animal{
    public function Sound(){
        echo " Squeak <br>";
    }
}
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animal = array($cat,$dog,$mouse);
foreach ($animal as $values){
    $values->Sound();
}




?>