<?php
setcookie("user","Bilal",(time()+(86400)),"/");
setcookie("user1","Mohsin",time()+(86400),"/");
setcookie("user2","ohsin",time()+(86400),"/");
setcookie("user3","Msin",time()+(86400),"/");
setcookie("user4","Moh",time()+(86400),"/");


if(isset($_COOKIE['user'])){
    echo "Cookie is  set";
    echo "<br />";
    echo "The value of Cookie is ". $_COOKIE['user'];
} else{
    echo "Cookie is not set";
}
echo "<pre>";
print_r($_COOKIE);
echo "<pre>";
?>