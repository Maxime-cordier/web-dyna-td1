<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ex 6</title>
	</head>
	<body>
	<?php
		$tableau=["SMITH","DOE","DOYLE"];
		echo $tableau[0];//Affiche SMITH
		
		$tableauAsso=["SMITH"=>5,"DOE"=>22,"DOYLE"=>37];
		echo $tableauAsso["SMITH"];//Affiche 5
	?>
	
	<?php
	element($titre,$contenu,$niveau=1);
	?>
	
	</body>
</html>