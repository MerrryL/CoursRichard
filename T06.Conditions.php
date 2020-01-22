<?php include 'menu.php'?>



<div class="container">
<h1>Conditions</h1>

<p>/ * - + % </p>
<h2>affectations</h2>

<?php
$nb1=5;
$nb2=10;
$total=0;

$total=$nb1;
$total+=$nb2;

?>

<p> AND && OR || XOR !</p>


<?php

$nom="Jules";

echo (isset($nom) ? $nom : "inconnu").'<br>';

if (isset($_GET["feu"]) AND ($_GET["feu"] !="")){
    $feu = htmlspecialchars($_GET["feu"]);

    if ($feu=="vert"){
        echo "<p class ='bg-success'>Ok on roule</p>";
    }elseif($feu=="orange"){
        echo "<p class ='bg-warning'>Il faut s'arréter</p>";
    }elseif($feu=="rouge"){
        echo "<p class ='bg-danger'>STOP</p>";
    }else{
        echo "<p> vous avez vu un éléphant rose </p>";
    }
}else{
    echo "Feu en panne";
}
?>
<?=(isset($nom) ? $nom : "inconnu").'<br>'?>

<?=date("H").'<br>'?>

<?php
$heure=date("H");
switch ($heure){
    case ($heure <10) :
        echo "Bonjour.<br>";
    break;
    case ($heure >10 and $heure <12) :
        echo "A bientôt la bouffe.<br>";
    break;
    case 12 :
        echo "Bon appétit.<br>";
    break;
    default :
    echo "Il est trop tard!!! <br>";

}
?>

</div>