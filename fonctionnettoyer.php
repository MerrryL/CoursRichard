<?php
session_start();

function nettoyer($donnees){
    $donnees=trim($donnees);
    $donnees=stripslashes($donnees);
    $donnees=htmlspecialchars($donnees);
    
    return ($donnees);
}

function erreur($erreur){
    switch ($erreur){
        case 35:
            return "Mauvais token";
        break;
        case 36:
            return "Mauvais login/pw";
        break;
        case 37:
            return "T'es pas facteur";
        break;


    }
}
?>