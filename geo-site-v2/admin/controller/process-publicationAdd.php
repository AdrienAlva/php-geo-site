<?php 

if(isset($_SESSION['loginId'])){

}//EO if( isset ($_SESSION['loginId']))
else{
	echo 'Accès non-autorisé.';
}