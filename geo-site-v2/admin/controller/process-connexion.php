<?php 

if (!empty($_POST['loginId'])  AND !empty($_POST['password'])) {

	require('../controller/functions.php');

	passwordVerification(htmlspecialchars($_POST['password']));

}//EO if !empty login and password