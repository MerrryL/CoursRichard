<?php include 'menu.php'?>

<div class="container">
    <h1>Tableaux</h1>
    <p>$nom[valeurs]</p>

    <?php
    $pays[]="Belgique";
    $pays[]="France";
    $pays[]="Espagne";
    $pays[]="Portugal";
    $pays[]="Luxembourg";
    $pays[]="Suisse";

    echo $pays[1]."<br>";

    $prenom= array("Jules", "Odéon", "Nestor","Alphonse");

    echo $prenom[2]."<br>";
    ?>
    
    <h2>Tableaux associatifs</h2>
    <?php
    $ecole["Nom"]="Eps Péruwelz";
    $ecole["Adresse"]="BIII 40 - 7600 Péruwelz";
    $ecole["Téléphone"]="+32 (0) 69 77 10 35";
    ?>

    <p><?= $ecole["Adresse"] ?></p>

    <?php
    $pays2 = array('BE'=>'Belgique',
                    'FR'=>'France',
                    'LUX'=>'Luxembourg',
                    'CH'=>'Suisse');
    echo $pays2['CH'].'<br>';

    ?>

    <table class="table table-dark table-striped">
    
    <th>ISO</th>
    <th>PAYS</th>

    <?php
    foreach($pays2 as $iso => $nompays){
    ?>

        <tr>
        <td><?=$iso ?></td>
        <td>
        <?=$nompays ?></td>
        </tr>
    <?php } ?>
    </table>

    <?php

    $nombres=array(5,1,4,3,2,7,8,9,10,6);

    foreach ($nombres as $nombre){
        echo $nombre.'<br>';
    }

    sort($nombres);

    foreach ($nombres as $nombre){
        echo $nombre.'<br>';
    }

    ?>

    <h2>Compter les items d'un tableau:</h2>

    <?=count($nombres); ?>


    
    

                    





</div>
