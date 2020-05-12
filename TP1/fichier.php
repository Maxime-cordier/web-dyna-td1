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
			echo 'RESULTAT : Il y a '. str_word_count($s). ' mots dans la phrase';
		}

		function charCount($s, $c) {
			echo 'RESULTAT : il y a '.mb_substr_count($s, $c)." fois le caractère ".'"'.$c.'"'." dans la phrase";
		}

		function longeur($chaine) {
			echo 'RESULTAT : Il y a '. strlen($chaine). ' caractères dans la phrase';
		}
	
		function minuscule($chaine) {
			echo "RESULTAT : </br>".strtolower($chaine);
		}
		
		function majuscule($chaine) {
			echo "RESULTAT : </br>".strtoupper($chaine);
		}
		
		function premier($chaine) {
			echo "RESULTAT : </br>".ucwords($chaine);
		}
		function couleur($chaine, $couleur) {
			echo "RESULTAT : </br> <p style=\"color:$couleur\"> $chaine </p>";
		}
	
		?>
	
	
	</body>
</html>	






