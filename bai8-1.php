<?php

/*if(isset($_COOKIE["user_name"])){
    setcookie("user_name", "Admin là Quỳnh đây!", time()+86400 * 30,"/");
    $user_name =$_COOKIE["user_name"];
    echo $user_name;}
}*/
setcookie("user_name", "Admin là Quỳnh đây!", time()-86400* 30,"/");

if (isset($_COOKIE["user_name"])) {
    //setcookie("user_name", "Admin là Quỳnh đây!", time()+86400 * 30,"/");
    $user_name = $_COOKIE["user_name"];
    echo $user_name;
} else{
    echo "Cookies đã bị xóa";
}
    
?>