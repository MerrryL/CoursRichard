<?php

require_once('fonctionnettoyer.php');

$token=isset($_POST["checktoken"]) ? nettoyer($_POST["checktoken"]) : NULL ;

if ($token!==$_SESSION["token"]){
    header("location:index.php?erreur=35");
    
}else{
    if($_SERVER['REQUEST_METHOD']=="POST" /*AND isset($_SERVER['HTTP_REFERER']) == "http://127.0.0.1/formlog.php"*/){

    

        var_dump($token);
        var_dump($_SESSION["token"]);
    
        
    
        $login=isset($_POST["login"]) ? nettoyer($_POST["login"]) : NULL ;
        $password=isset($_POST["password"]) ? nettoyer($_POST["password"]) : NULL ;
        $souvenir=isset($_POST["souvenir"]) ? nettoyer($_POST["souvenir"]) : NULL ;
    
        var_dump($login." ".$password);
    
        if ($login=="test@machin" and $password=="123456"){
            $_SESSION['login']=$login;
            $_SESSION['password']=hash('sha256',$password);
    
            var_dump($_SESSION);
    
            if ($souvenir == "on"){
                setcookie('login', hash('sha256',$login), time()+300, null, null, false, true);
                setcookie('password', hash('sha256',$password), time()+300, null, null, false, true);
            }        
            header("location:admin.php");
        
            
        }else{
            header("location:index.php?erreur=36");
        }
    
    
    }else{
        header("location:index.php?erreur=37");
    }   

}





