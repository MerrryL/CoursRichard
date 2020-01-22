<?php include 'menu.php'?>

<?php
$nb1=20;
$nb2=40;
$txt_prenom="biloute";



function Compte(){
    static $x=0;
    echo "<p>".$x."</p>";
    $x++;
}

Compte();
Compte();
Compte();
Compte(); 

unset($x);
var_dump(isset($x));
var_dump(empty($x));
$b=100;

echo $a ?? 5;
echo "<br>";
echo $a ?? $b ?? 5;


?>
<h2>Orienté objet </h2>
<div>

<?php

class voiture{
    function __construct(){
        $this->marque="Porsche";
        $this->modele="Taycan";

    }
}

$nouveaumodele= new voiture();

echo "<p> Marque:".$nouveaumodele->marque . "</p> \n
    <p> Modele:".$nouveaumodele->modele . "</p>" ;
?>

<h2>Manipulation sur chaîne de caractère</h2>

<p> Longueur du prénom : 
<?php echo strlen($txt_prenom); ?> </p>
<p> Inverser le prénom : 
<?php  echo strrev($txt_prenom);?>
<?php  $message="Ceci est un message" ;?> </p>
<p>Position d'un mot dans un texte :
<?php  echo strpos($message, "un");?> </p>
<p>remplacer du texte :
<?php  echo str_replace('message', 'texte', $message);?> </p>
<p>Compter les mots :
<?php  echo str_word_count($message);?> </p>
<p>Majuscule : 
<?php  echo strtoupper($message);?> </p>
<p>Minuscule : 
<?php  echo strtolower($message);?> </p>
<p>Première majuscule : 
<?php  echo ucfirst($message);?> </p>
<p>Toutes les premières majuscules : 
<?php  echo ucwords($message);?> </p>

<h2>Constantes</h2>


<?php  define("COULEUR","lime",true);

$couleur = "lightblue";

function AfficheCarre($color){
    echo "<div style='width:100px;height:100px;background-color:".$color.";'></div>";
};

AfficheCarre(COULEUR);
AfficheCarre($couleur);
?> 


<a href="./T02.variables.php?nom=durand&prenom=anne%20julie">lien vers 2</a>

<a href="./T02.variables.php?nom=durand&prenom=%3Cscript%3Ealert(%27test%27)%3C/script%3E">script malicieux</a>




</div>