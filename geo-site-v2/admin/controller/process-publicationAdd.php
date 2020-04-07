<?php 

session_start();

if(isset($_SESSION['loginId'])){

	require_once("../model/admin-model.php");

	addElecRessource($_POST['name'], $_POST['surname'], $_POST['title'], $_POST['support'], $_POST['location'], $_POST['editor'], $_POST['publicationDate'], $_POST['majDate'], $_POST['consultation'], $_POST['url']);

	require_once("../view/notice-management.php");

}//EO if( isset ($_SESSION['loginId']))
else{
	echo 'Accès non-autorisé.';
}