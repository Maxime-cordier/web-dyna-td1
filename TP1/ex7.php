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
		<textarea name="message" rows="8" cols="45"> 'votre message ici' </textarea>
		<input type="submit" value="compter">
	</form>
	
	<?php
	wordCount($_POST["message"]);
	?>
	
	
	si c n'est pas nul > compter le nbr de fois c dans la chaine
	sinon compter le nbr de mots
	
	</body>
</html>