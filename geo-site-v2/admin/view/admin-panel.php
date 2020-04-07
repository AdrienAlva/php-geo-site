<?php 

if(!isset($_SESSION)){session_start();}

if( isset ($_SESSION['loginId'])){

	$title = 'Admin panel';

	ob_start(); ?>

		<ul>
			<li><span>Créer une notice bibliographique : </span><a href="../view/publicationsAdd-form.php">électronique</a></li>
			<li><span>Supprimer ou modifier une notice bibliographique : </span><a href="/geo-site-v2/admin/view/notice-management.php">gérer</a></li>
		</ul>

		<a href="../controller/logout.php">Déconnexion</a>

	<?php $content = ob_get_clean();

	require("admin-template.php");


}//EO if( isset ($_SESSION['loginId']))
else{
	echo 'Accès non-autorisé.';
}