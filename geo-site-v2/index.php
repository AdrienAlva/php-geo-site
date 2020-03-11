<?php $title = 'Welcome'; ?>

<?php ob_start(); ?>

	<div id="whiteBack">
		<p>Ceci est la page d'accueil.</p>	
	</div>


<?php $content = ob_get_clean(); ?>

<?php require("view/template.php"); ?>