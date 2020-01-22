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
    

<select class="custom-select">
  <option selected>Open this select menu</option>
  <option value="1" id="btncharger">Microsoft</option>
  <option value="2" id="btncharger2">Apple</option>
  <option value="3" id="btncharger3">Linux</option>
</select>




       

        <div id="donnees"></div>
 
    </div>


       





  </body>
</html>
   <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js" ></script>

 <script>

  $(document).ready(function(){

    $("#btncharger").click(function(){

      $.ajax({
        type:'GET',
        url:'marque.php?l='+$(this).val(),
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