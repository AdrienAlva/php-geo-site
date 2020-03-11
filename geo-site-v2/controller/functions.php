<?php 

require("../model/model.php");

function displayElecBiblio(){

	$data = readElecRessource();

	while($display = $data->fetch()) { ?>

		<p>
			<?php if(!empty($display['name'])){ echo $display['name'] . ', ';} ?>


			<?php if(!empty($display['surname'])){ echo $display['surname'] . '. ';} ?>

			<?php if(!empty($display['title'])){ echo $display['title'] . ' ';} ?>

			<?php if(!empty($display['support'])){ echo '[' . $display['support'] . ']' . '. ';} ?>

			<?php if(!empty($display['location'])){ echo $display['location'] . ', ';} ?>

			<?php if(!empty($display['editor'])){ echo $display['editor'] . ', ';} ?>

			<?php if(!empty($display['publicationDate'])){ echo $display['publicationDate'] . '. ';} ?>

			<?php if(!empty($display['consultation'])){ echo '[réf. du ' . $display['consultation']. ']' . '. ';} ?>

			<?php if(!empty($display['url'])){ echo 'Disponible sur : <<a href=\'https://www.researchgate.net/publication/333440457_Comparison_of_Hyperspectral_Techniques_for_Urban_Tree_Diversity_Classification\'>' . $display['url'] . '</a>>';} ?>






		</p>



	<?php
		$data->closeCursor();
	}//EO while -> display content

}//EO displayElecBiblio function 

displayElecBiblio();