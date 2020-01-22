<?php include 'menu.php'?>



<a href="./T04.supercolor.php?color=purple">Changer la couleur</a>

<h1>Superglobale</h2>
<h2>Récupérer $GLOBALS</h2>

<p>Les variables serveurs</p>
<p><?php echo $_SERVER['PHP_SELF']?></p>
<p><?php echo $_SERVER['SERVER_NAME']?></p>
<p><?php echo $_SERVER['HTTP_HOST']?></p>
<p><?php echo $_SERVER['HTTP_USER_AGENT']?></p>
<p><?php echo $_SERVER['SCRIPT_NAME']?></p>
<p><?php echo $_SERVER['SERVER_ADDR']?></p>
<p><?php echo $_SERVER['HTTP_REFERER']?></p>
<p><?php echo $_SERVER['REMOTE_ADDR']?></p>



