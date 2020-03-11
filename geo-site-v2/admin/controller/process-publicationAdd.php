<?php 

session_start();

if(isset($_SESSION['loginId'])){

	require("../model/admin-model.php");

	addElecRessource($_POST['name'], $_POST['surname'], $_POST['title'], $_POST['support'], $_POST['location'], $_POST['editor'], $_POST['publicationDate'], $_POST['majDate'], $_POST['consultation'], $_POST['url']);

}//EO if( isset ($_SESSION['loginId']))
else{
	echo 'Accès non-autorisé.';
}