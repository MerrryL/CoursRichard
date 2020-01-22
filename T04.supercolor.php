<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    
    <link href="./css/sticky-footer.css" rel="stylesheet">
    <style>
        
    
    </style>
    
    <?php
    //var_dump($GLOBALS);
    

    if (isset($_SERVER['HTTP_REFERER'])=='http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']){
        $couleur= htmlspecialchars($_GET['color']);
        echo "<h1>hello</h1>";

        if (isset($couleur) AND $couleur!=""){
            echo "<style>body{background-color:".$couleur."};</style>";
        }else{
                echo "<style>body{background-color:yellow};</style>";
        }
    }else{
            echo "<style>body{background-color:lightgrey};</style>";
            $erreur="Mauvaise origine";
    }
    

    ?>
</head>
<?php 
var_dump($_SERVER['HTTP_HOST']);
var_dump($_SERVER['SCRIPT_NAME']);
var_dump($couleur);
?>
<body>