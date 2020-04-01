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
	$s=$_POST[message];
	wordCount($s);
	?>
	
	</body>
</html>