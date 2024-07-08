<?php
if(isset($_POST['name'])){
    $submit = true;
    class User{
        function userName($name){
        echo "Hey " .$_POST['name']." Your form is submitted";
        }
    }
    $obj = new User;
    $obj->userName($_POST['name']);
} 
// By using constructor method 
// if(isset($_POST['name'])){
//     class User{
//         function __construct($name){
//             echo "The user name is ".$name;
//         }
//     }
//     $obj = new User($_POST['name']);
// }
?>
<?php  
if(!isset($submit)){ ?>
<form method="post" enctype="multipart/form-data">
        <br>
        <input type="text" name="name" />
         <button>Submit</button><br/>
    </from> 
<?php
}
?>
    
