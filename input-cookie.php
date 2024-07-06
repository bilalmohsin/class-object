<!-- <html>
<head>
    <title>Cookie </title>
</head>
<body>
    <form method="post" >
        <input type="text" name="user">
        <br/>
        <br/>
        <button name="btn" value="set">Set Cookie</button>
        <br/>
        <br/>
        <button name="btn" value="show">Show Cookie</button>
        <br/>
        <br/>
        <button name="btn" value="delete">Delete Cookie</button>
    </form>
</body>
</html> -->
<html>
<head>
    <title>Cookie </title>
</head>
<body>
    <form method="post" >
        <input type="text" name="user">
        <br/>
        <br/>
        <button name="btn" value="set">Session Set</button>
        <br/>
        <br/>
        <button name="btn" value="show">Session Display</button>
        <br/>
        <br/>
        <button name="btn" value="delete">Session Delete</button>
    </form>
</body>
</html>
<?php
// Sesion create, display and delete
session_start();
if(isset($_POST['btn'])){
    if($_POST['btn']=="set"){
        $val=$_POST['user'];
        $_SESSION['user'] = $val;
    }
    if($_POST['btn']=="show"){
        echo $_SESSION['user'];
    }
    if($_POST['btn']=="delete"){
        session_destroy();
    }
}
// Cookie set, display and delete
// if(isset($_POST['btn'])){
//     if($_POST['btn']=="set"){
//         $val = $_POST['user'];
//         setcookie("User",$val,time()+(86400));
//         echo "Cookie set";
//     }
//     if($_POST['btn']=="show")
//     {
//         if(isset($_COOKIE['User'])){
//         echo $_COOKIE['User']; 
//         }
//     }
//     if($_POST['btn']=="delete"){
//         if(isset($_COOKIE['User'])){
//             setcookie("User",-1);
//             echo "Cookie deleted";
//         }
        
//     }
// }
?>