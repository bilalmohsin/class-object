<?php
/*
trait firstTrait{
    public function FirstMethod(){
        echo "OOP is fun and we can play a lot.<br>";
    }
}
class Objectoriented{
    use firstTrait;
}
class Programming{
    use firstTrait;
}
$obj = new Objectoriented();
$obj->FirstMethod();
$obj1 = new Programming();
$obj1->FirstMethod();   */
 
trait First{
    public function msg(){
        echo "OOP is fun <br>";
    }
}
trait Second{
    public function msg1(){
        echo "We can do many with OOP.";
    }
}
class Msg{
    use First;
}
class Msg2 extends Msg{
    use Second;
}
class Msg1{
    use First,Second;
}
$obj = new Msg();
$obj->msg();
$obj1 = new Msg1();
$obj1->msg1();




?>