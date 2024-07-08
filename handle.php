<?php
if(isset($_POST)){
    $name = $_POST['name'];
    echo "The user name is ".$name."<br>";
    $email = $_POST['email'];
    echo "The user email is ".$email."<br>";
    $password = $_POST['password'];
    echo "The user password is ".$password."<br>";
    $gender = $_POST['gender'];
    echo "The user sex is ".$gender."<br>";
    $city = $_POST['city'];
    echo "The user city is ".$city."<br>";
    $address = $_POST['address'];
    echo "The user address is ".$address;

}





?>