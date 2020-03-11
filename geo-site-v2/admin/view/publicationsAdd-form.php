<?php

session_start();

if( isset ($_SESSION['loginId'])){

	$title = 'Ajouter une notice bibliographique électronique';

	ob_start(); ?>

		<p>(selon la Norme internationale ISO 690-2 reprise en France par la norme AFNOR NF Z-44005-2 du 20 janvier 1998)</p>
		<br/>
		<hr/>
		<p>NOM de l'auteur, Prénom (ou organisme). Titre de la page d'accueil [type de support]. Lieu de publication : éditeur, date. Date de mise à jour. [Date de consultation]. Disponibilité et accès.
		</p>
		<br/>
		<hr/>

		<form method="post" action="../controller/process-publicationAdd.php">
			<label>Nom de l'auteur</label><input type="text" name="name"><br/>
			<label>Prénom de l'auteur ou organisme : </label><input type="text" name="surname"><br/>
			<label>Titre de la page d'accueil : </label><input type="text" name="title"><br/>
			<label>Type de support : </label><input type="text" name="support"><br/>
			<label>Lieux de publication : </label><input type="text" name="location"><br/>
			<label>Editeur : </label><input type="text" name="editor"><br/>
			<label>Date de publication : </label><input type="date" name="publicationDate"><br/>
			<label>Date de mise à jour : </label><input type="date" name="majDate"><br/>
			<label>Date de consultation : </label><input type="date" name="consultation"><br/>
			<label> URL : </label><input type="url" name="url"><br/>
			<input type="submit" name="valider">
		</form>

	<?php $content = ob_get_clean();

	require("admin-template.php");


}//EO if( isset ($_SESSION['loginId']))
else{
	echo 'Accès non-autorisé.';
}