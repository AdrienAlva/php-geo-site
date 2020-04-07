<?php

session_start();

if( isset ($_SESSION['loginId'])){

	require_once("../model/admin-model.php");

	deleteNotice($_POST['delete']);//parameter's value is the notice id

	require_once("../view/notice-management.php");

}//EO if( isset ($_SESSION['loginId']))
else{
	echo 'Accès non-autorisé.';
}