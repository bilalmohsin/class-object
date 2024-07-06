<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post"> 
        <input type="text" name="user" />
        <br />
        <br />
        <button name="button" value="set">Set Session</button>
        <br />
        <br />
        <button name="button" value="display">Display</button>
        <br />
        <br />
        <button name="button" value="delete">Delete</button>
        <br />
        <br />

    </form>
</body>
</html>
<?php
session_start();
if(isset($_POST['button'])){
    if($_POST['button']=="set"){
        $val = $_POST['user'];
        $_SESSION['user']=$val;
    }
}
     if($_POST['button']=="display"){
        echo $_SESSION['user'];
     }
     if($_POST['button']=="delete"){
        session_destroy();
     }



?>