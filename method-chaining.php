<?php
class Fruit{
    function getColor(){
        echo "Fruit color is return by this function.<br>";
        return $this;
    }
    function getName(){
        echo "Fruit name is return by this function.<br>";
        return $this;
    }
    function getType(){
        echo "Fruit type is return by this function.<br>";
        return $this;
    }
    function getWeight(){
        echo "Fruit weight is return by this function.<br>";
        return $this;
    }
    function getTaste(){
        echo "Fruit coltaste is return by this function.";
        return $this;
    }
}
$obj = new Fruit();
$obj->getColor()->getName()->getType()->getWeight()->getTaste();













?>