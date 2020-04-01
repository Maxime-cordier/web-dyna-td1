<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ex 7</title>
	</head>
	<body>
	<?php
	include("fichier.php");
	?>
	
	<form method="POST" >
		<label for="txt">Frapper votre texte : </label> <br>
		<textarea name="message" rows="8" cols="49">Ecrivez votre texte ici</textarea>
		<br>
		<label for='choix'>Que voulez vous compter ? :</label> <br>
			<select name="ex1" />
				<option value="1">Nombre de mots</option>
				<option value="2">Nombre de caractère X </option>
			</select>
		</label> <br> <br>
		<label for="crtr">(Si besoin rentrez le caractère X):</label>
		<input type="string" value="" name="crtr">
		<br> <br> 
		<input type="submit" value="compter">
	</form>
	<br> <br>
	
	<?php 
	$e=$_POST['ex1'];
	if ($e==1) {
		wordCount($_POST['message']);
	} else {
		charCount($_POST['message'], $_POST['crtr']);
	}
	?>
	
	</body>
</html>