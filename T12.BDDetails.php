<?php

require_once('./fonctionnettoyer.php');
require_once('./dblogin.php');

if (!isset($_GET["userid"])){
    header('location:T11.BDREAD.php');
    //die();
}



if ($_GET["userid"]=="new"){
    require_once('./menu.php');

}else{

    $id = nettoyer($_GET["userid"]);

    $sql = "SELECT * FROM tuser WHERE id_user='" . $id . "'";
    $query = $bdd->query($sql);
    $reponse = $query->fetch();

    if (isset($reponse) AND empty($reponse))
    {
        echo ("wtf");
        var_dump($reponse);
        header("location:http://localhost/starter/T11.BDread.php");
    }
    require_once('./menu.php');


    $userid= nettoyer($_GET["userid"]);
    //var_dump($userid);

    $query= $bdd->query('SELECT * FROM tuser WHERE id_user='.$userid);
    $reponse = $query->fetch();
    $query->closeCursor();

    $query= $bdd->query('SELECT count(id_user) AS nbuser FROM tuser');
    $total = $query->fetch();
    //var_dump($total);
    $query->closeCursor();



    //var_dump($reponse);
}


?>
<?php require_once('./lang/detectlang.php')?>


<div class="container">
    <h1>Details BD</h1>

    <?php
    require_once('./dblogin.php');

    
    ?>

    <form action="updateUser.php" method="post">
    <input hidden type="text" class="form-check-input" id="checktoken" name="checktoken" value=<?=$token?> >
    

    <div class="card bg-secondary">
        <?php 
        if(isset($reponse['use_avatar']) && file_exists($reponse['use_avatar'])) 
        {
            ?>
            <img width="150px" height="150px" src="<?=$reponse['use_avatar']?>" >
            
            <?php

        } else{
            ?><p>No Avatars for the guy</p><?php

        }?>
        
        
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item bg-secondary">ID: <input readonly type="text" name="iduser" value="<?= isset($reponse['id_user']) ? $reponse['id_user'] : "" ?>"></li>
                <li class="list-group-item bg-secondary">Login: <input type="text" name="login" value="<?= isset($reponse['use_login']) ? $reponse['use_login'] : "" ?>"></li>
                <li class="list-group-item bg-secondary">Email: <input type="text" name="email" value="<?= isset($reponse['use_email']) ? $reponse['use_email'] : "" ?>"></li>
                <li class="list-group-item bg-secondary">Password: <input type="text" name="password" value="<?= isset($reponse['use_password']) ? $reponse['use_password'] : "" ?>"></li>
                <li class="list-group-item bg-secondary">
                Newsletter?:
                    <input type="radio" name="newsletter"
                    <?php if (isset($reponse['use_newsletter']) AND $reponse['use_newsletter']=="1") echo "checked";?>
                    value="yes">Yes
                    <input type="radio" name="newsletter"
                    <?php if (isset($reponse['use_newsletter']) AND$reponse['use_newsletter']=="0") echo "checked";?>
                    value="no">No
                </li>
            </ul>
        </div>
        <div class="card-body">
        <input type="text" value="<?=$token?>" hidden>

        <button class="btn btn-danger btn-lg">Retour sans sauver</button>

        
        <button type="submit" class="btn btn-success btn-lg"> <?= isset($userid) ? "Quitter et sauver" : "Créer ce nouvel utilisateur" ?></button>
        </div>


    </div>
    </form>

        
</div>




<footer class="footer font-small blue pt-4">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md0 mt-3">
                <h5 class="text-uppercase">Footer Content</h5>
                <p>EPS Péruwelz - &copy; 20<?php echo date("y");?> Delcampe Amory.</p>

            </div>
        </div>
    </div>
    
</footer>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="jquery/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/stupidtable/1.1.3/stupidtable.min.js"></script>
<script>
$("table").stupidtable();

function userDetail(id){
    alert("Hello " + id);
}
</script>
</body>

</html>