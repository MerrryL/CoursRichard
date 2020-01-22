<?php require_once('./fonctionnettoyer.php');
require_once('./dblogin.php');

$token= bin2hex(openssl_random_pseudo_bytes(64));

$_SESSION["token"]=$token;

//var_dump($_SESSION["token"]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    
    <link href="./css/sticky-footer.css" rel="stylesheet">
    
    <?php require_once('./lang/detectlang.php')?>
    <?php require_once('./CookiesCouleurs.php')?>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><?= $LANGUE['welcome'] ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="index.php"><?= $LANGUE['home'] ?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdownLinks" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Links
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownLinks">
                <a class="nav-link" href="T01.variables.php">Variables1</a>
                <a class="nav-link" href="T02.variables.php">Variables2</a>
                <a class="nav-link" href="T03.superglobal.php">SuperGlobal</a>
                <a class="nav-link" href="T04.supercolor.php">SuperCOLOR</a>
                <a class="nav-link" href="T05.Tableau">Tableau</a>
                <a class="nav-link" href="T06.Conditions">Conditions</a>
                <a class="nav-link" href="T07.Sessions">Sessions</a>
                <a class="nav-link" href="./T11.BDread.php">LectureBD</a>
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </div>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Language
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php require_once('./lang/langAccepted.php');
                $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

                foreach($langAccepted as $lan){
                    ?>
                    <a class="dropdown-item changeLang" href="<?= $url . "?langue=" .$lan ?>""><?= $lan ?></a>
                    <?php
                }
                ?>
                </div>
            </li>
        </ul>
        <?php
        if (!isset($_SESSION['login'])){?>
            <form class="form-inline" action="login.php" method="POST">
                <input class="form-control" id="login" name="login" type="email" placeholder="Login" aria-label="Login">
                <input class="form-control" id="password" name="password" type="password" placeholder="Password" aria-label="Password">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="souvenir" name="souvenir">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <input hidden type="text" class="form-check-input" id="checktoken" name="checktoken" value=<?=$token?> >
                <button class="btn btn-outline-success" type="submit">Login</button>
            </form>

            <?php            
        }else{ ?>
            <a href="destroy.php" class="btn btn-warning">Se Déco</a> 
            <?= isset ($_SESSION['login']) ? $_SESSION ['login'] : 'inconnu'?>
        <?php
        } ?>
        
        
    </div>
</nav>

<h2><?= $LANGUE['languageDetected'] ?> </h2>


<p><?= $LANGUE['prefferedMeal'] ?> </p>

<?php 


$code= isset($_GET['erreur']) ? nettoyer($_GET['erreur']) : 0 ;

$erreur = erreur($code);

if ($code !== 0){
    echo "erreur n°" .$code . " : ". $erreur;
}

    




?>