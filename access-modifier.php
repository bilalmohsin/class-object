<?php
class Car{
  public $name;
  public $model;
  public $color;
  function set_name($name){
    $this->name=$name;
  }
  function get_name(){
    return $this->name;
  }
  function set_model($model){
    $this->model=$model;
  }
  function get_model(){
    return $this->model;
  }
  function set_color($color){
    $this->color=$color;
  }
  function get_color(){
    return $this->color;
  }
  
}
$a = new Car();
$a->set_name("honda");  // Show result
echo $a->get_name()."<br>";  // Show result if method is public otherwise give error
$a->set_model("bard"); 
echo $a->get_model()."<br>"; // Show result if method is public otherwise give error
$a->set_color("red");
echo $a->get_color(); // Show result if method is public otherwise give error
?>