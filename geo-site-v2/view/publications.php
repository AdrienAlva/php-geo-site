<?php $title = 'Publications'; ?>

<?php require("../controller/functions.php"); ?>

<?php ob_start(); ?>

	<div id="whiteBack">
			<?php displayElecBiblio(); ?>
	</div>


<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>