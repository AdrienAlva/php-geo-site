<?php 

if( isset ($_SESSION['loginId'])){

	$title = 'Admin panel';

	ob_start(); ?>

		<ul>
			<li><span>Créer une notice bibliographique : </span><a href="../view/publicationsAdd-form.php">électronique</a></li>
		</ul>

	<?php $content = ob_get_clean();

	require("admin-template.php");


}//EO if( isset ($_SESSION['loginId']))
else{
	echo 'Accès non-autorisé.';
}