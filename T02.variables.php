<?php include 'menu.php'?>

<h2>Récupérer des données avec GET</h2>

<?php

if (isset($_GET["prenom"]) || isset($_GET["nom"])){
    $prenom= htmlspecialchars($_GET["prenom"]); //dur à hacker
    $nom= $_GET["nom"]; //facile à hacker

    echo "<p>Votre nom est ".$nom."et votre nom est ".$prenom."</p>";



}
else{
    echo "<p>Bonjour cher·ère inconnu·e</p>";
}




?>

