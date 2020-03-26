<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ex 4</title>
	</head>
	<body>
	
	<table border='1'>
    <tbody>
       
		<a href="?c=2&l=2">Tableau 2 x 2</a><br>
		<a href="?c=5&l=5">Tableau 5 x 5</a><br>
		<a href="?c=10&l=8">Tableau 10 x 8</a><br>
	   
	    <br>
	  
		<?php
			$nbLignes=$_GET["l"]??10;
			$nbColonnes=$_GET["c"]??10;
		?>
		
		<table border='1'>
	<tbody>
		<?php 
		for($i=0;$i<$nbLignes;$i++)
		{
			$gras=($i%2==0)?"bold":"normal";
		?>
			
		<tr>
		<?php for($j=0;$j<$nbColonnes;$j++)
		{
			$couleur=($j%2==0)?"red":"black";
		?>
				
		<td style="font-weight: <?=$gras ?>;color:<?=$couleur ?>"><?="$i - $j"?></td>
		<?php }?>
		</tr>
		<?php }?>
	<?php}?>


	</body>
</html>