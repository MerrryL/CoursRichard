<?php
require_once('./fonctionnettoyer.php');
require_once('./dblogin.php');

$token=isset($_POST["checktoken"]) ? nettoyer($_POST["checktoken"]) : NULL ;


if ($token!==$_SESSION["token"]){
    header("location:index.php?erreur=35");
    
}

$id= nettoyer($_POST["iduser"]);
$login = nettoyer($_POST["login"]);
$email = nettoyer($_POST["email"]);
$password = hash("sha256", nettoyer($_POST["password"]));

if (nettoyer($_POST["newsletter"]="yes"))
{
    $newsletter = "1";
}else{
    $newsletter = "0";
}


//var_dump("test" . $login.$email.$newsletter);

if (isset($id) AND !empty($id))
{

    $query = $bdd->query("SELECT * FROM tusers WHERE id_user='" . $id . "'");
    if (isset($query) AND empty($query))
    {
        header("location:http://localhost/starter/T11.BDread.php");
    }



    $sql = "UPDATE tuser SET ";
    $sql = $sql . "use_login ='" . $login . "', use_email ='" . $email . "', use_password ='" . $password . "', use_newsletter ='" . $newsletter;
    $sql = $sql . "'WHERE id_user='". $id . "';";

}else{
    


    $sql = "INSERT INTO tuser (use_login, use_password, use_email, use_newsletter)";
    $sql = $sql . "VALUES ('". $login . "','" . $password . "','" . $email . "','" . $newsletter . "')";

}

var_dump($sql);

try{
    $bdd->query($sql);
}
catch(Exception $error){
    die('Erreur '.$error->getMessage());
}


header("location:http://localhost/starter/T11.BDread.php");


?>