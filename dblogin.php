<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=dblogin','root','');
}
catch(Exception $error){
    die('Erreur '.$error->getMessage());
}

//var_dump($bdd);

?>