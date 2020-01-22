<?php
session_start();
var_dump($_SESSION['color']);

if (!isset($_SESSION['depart'])){
    header('location:index.php');
    //die();
}

?>



<?php include 'menu.php'?>

<style type="text/css">
body{
    background-color: <?= (isset($_SESSION['color']) ? $_SESSION['color'] : 'lightgrey' )?>;

}

</style>
<body>
    <div>
        <h1>Les sessions en couleur</h1>
    </div>

    <?php
    $dureelimite=15;
    var_dump(time()-$_SESSION['depart']);
    if (time()-$_SESSION['depart']>$dureelimite){
        echo "Fin de session";
        $_SESSION=array();

        if (ini_get("session.use_cookies")){
            $params = session_get_cookie_params();
            setcookie(session_name(),'',time()-42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]);
        }
        session_destroy();

        //supprimer le cookies de session PHPSESSIONID
        header('location:index.php');
    }

    ?>
</body>
