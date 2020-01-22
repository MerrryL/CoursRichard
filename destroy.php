<?php

session_start();
$langue=$_SESSION['langue'];
$_SESSION['login']=NULL;
$_SESSION['password']=NULL;

session_destroy();
$_SESSION['langue']=$langue;

header("location:index.php");
?>