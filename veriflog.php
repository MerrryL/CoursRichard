<?php


if (isset($_COOKIE['login']) AND isset($_COOKIE['password'])){
    $login = $_COOKIE['login'];
    $password= $_COOKIE['password'];
}else{
    if(isset($_SESSION['login']) AND isset($_SESSION['password'])){
        $login =  hash('sha256',$_SESSION['login']);
        $password= $_SESSION['password'];
    }
    else{
        session_destroy();
        header("location:http://localhost/starter/T01.variables.php");
    }
}


if ( ($login== hash('sha256',"test@machin")) AND ($password == hash('sha256', '123456')) ){
    echo ("ok");
}else{
    var_dump($login . " ". $password);
    session_destroy();
    //header("location:http://localhost/starter/T02.variables.php");
}