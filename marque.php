<?php 

include('fctclean.php');

switch (nettoyer($_GET["l"])){

	case 1 : 
	echo "fondé par billy";
	break;

	case 2:
	echo "fondé par Steevy";
	break;
	case 3:
	echo "fondé par Lili";
	break;


	default:
	echo "Erreur de sélection";
	break;










}











?>