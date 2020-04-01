<html>
	<head>
		<meta charset="UTF-8">
		<title>fonctions</title>
	</head>
	<body>
	<?php
		function createHtmlTables($nbLignes,$nbColonnes)
	{?>
	<table border='1'>
			<tbody>
				<?php 
				for($i=0;$i<$nbLignes;$i++)
				{?>
					<tr>
					<?php for($j=0;$j<$nbColonnes;$j++)
					{?>
						<td><?="$i - $j"?></td>
					<?php }?>
					</tr>
				<?php }?>
	<?php } ?>
	
	
	
	<?php
		function element($titre,$contenu,$niveau)
	{?>
	<h<?php echo $niveau?>> <?php echo $titre ?> </h<?php echo $niveau?>>
	<div> <?php echo $contenu?> <div>
	<hr>
	<?php } ?>
	
	
	<?php
		function parseElements($titre,$contenu,$niveau)
	{
	$elements=[
		[element($titre="Exercices",$contenu="Liste des exercices disponibles:",$niveau)],
		[element($titre="Exercice 1",$contenu="Créer une focntion",$niveau)],
		[element($titre="Exercice 2",$contenu="Afficher le contenu d'un tableau",$niveau)],
	];
	} ?>
	
	<?php
		function wordCount($s) {
			$nbmots=str_word_count($s);
			echo 'Il y a '. $nbmots. ' mots dans la phrase';
		}
	?>
	
	<?php
		function charCount($s, $c=NULL) {
			$nbcaractère=strlen($s);
			echo 'il y a '.$nbcaractère.' caractères dans la phrase';
		}
	?>
	
	
	
	
	</body>
</html>