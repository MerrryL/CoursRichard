<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php include("header.php");?>
    <title>Tableaux</title>
  </head>
  <body>
    <?php include("menu.php");?>




    <div class="container">
      <h1>Ajax</h1>
    

<select id="choix" name="choix">
 
    <?php include("connect.php");

         
         $query= $bdd->query('SELECT * FROM tuser');
      $reponse = $query->fetchAll();// pour l affichage du tableau/delareponse



   foreach ($reponse as $enr){


  echo '<option value="' . $enr["use_login"].'" >' . $enr["use_login"].'</option>';
  



 }

 $query->closeCursor(); ?>

 
</select>




       

        <div id="donnees"></div>
 
    </div>


       





  </body>
</html>
   <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js" ></script>

 <script>

  $(document).ready(function(){

    $("#choix").change(function(){

      $.ajax({
        type:'GET',
        url:'ajaxexo2.php?uti='+$(this).val(),
        timout:3000,
        success: function(donnees) {
          $("#donnees").html(donnees);


        },
        error: function(){
          $("#donnees").html("La requete n'a pas abouti");
        }




      });



    });




    });
        











  </script>