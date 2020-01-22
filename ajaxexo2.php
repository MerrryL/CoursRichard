


<?php require_once("connect.php");
 require_once("fctclean.php");

      // iseet serveur http referer , je dois verifier d'ou je viens ( serveur http refer == http://127.0.0)
      
       $userid=nettoyer($_GET['uti']);

      
        $reponse = $bdd-> prepare('SELECT * from tuser WHERE  use_login= :userid');
$reponse -> bindValue('userid',$userid,PDO::PARAM_STR);
$reponse->execute();
$enr=$reponse->fetch();

            //--------------------------------------------

       

       //---------------------------------------------


       ?>

    <div class="container p-4">

      <div class="card" style="width:200px;">
        <?php
        if($enr['use_avatar']!="" AND file_exists("avatar/".$enr['use_avatar'])){ ?>
      <img class="card-img-bottom" src="avatar/<?= $enr['use_avatar']?>" alt="ma photo profil">
          <?php  }else { ?>
            <img class="card-img-bottom" src="avatar/default.png" alt="ma photo profil">

       <?php   }?>
      <div class="card-body">
        <h4 class="card-title">User</h4>
        <p class="card-text"><?= $enr['use_login']?></p>
        <p class="card-text"><?= $enr['use_password']?></p>
        <p class="card-text"><?= $enr['use_admin']?></p>
     

      </div>
      
      
    </div>

  </div>

      
             




             



 
