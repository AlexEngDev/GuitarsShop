<?php
 
 $serv = "localhost";
 $user = "Alex";
 $pass = "230687";
 $db = "video";

function test_input($param) {
    $param = trim($param);                  
    $param = stripslashes($param);          
    $param = htmlspecialchars($param);      
    return $param;
}



?>