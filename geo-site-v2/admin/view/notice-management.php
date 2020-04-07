<?php 

if(!isset($_SESSION)){session_start();}

if( isset ($_SESSION['loginId'])){

	$title = 'Gestion des notices bibliographiques';

	ob_start(); ?>

		<?php require_once("../controller/functions.php");

		managementElecBiblio();

		?>
		<div class="noticeManagementLinks">
		<a href="/geo-site-v2/admin/view/admin-panel.php">Accueil administrateur</a>
		<span> / </span>
		<a href="../controller/logout.php">Déconnexion</a>
		</div>

	<?php $content = ob_get_clean();

	require("admin-template.php");

}//EO if( isset ($_SESSION['loginId']))
else{
	echo 'Accès non-autorisé.';
}//EO else -> accès non-autorisé