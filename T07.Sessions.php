<?php 
session_cache_expire(1);
$cache_expire = session_cache_expire();
session_start();
echo "Votre session expire dans".$cache_expire."<br>";
echo "La session :".session_id();


$_SESSION['depart']=time();
$_SESSION['color']="blue";




var_dump($_SESSION)
?>


<?php include 'menu.php'?>

<div>
    <h1>Les sessions</h1>
    <a href="T08.SessionsCouleurs.php">Sessions Couleurs</a>
    
</div>

