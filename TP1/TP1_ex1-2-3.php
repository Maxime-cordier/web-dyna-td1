<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css" />
		<title>TP1-EX1-2-3</title>
	</head>
	<body>
		<h1>Ex 1</h1>
		<?php echo("Hello world !"); ?>
		<br> <br>
		
		
		<a href="/web-dyna-td1/TP1/TP1_ex1-2-3.php?message=Salut">Afficher Salut</a> <br>
		<a href="/web-dyna-td1/TP1/TP1_ex1-2-3.php?message=Bonjour ">Afficher Bonjour</a> <br>
		<a href="/web-dyna-td1/TP1/TP1_ex1-2-3.php?message=Coucou">Afficher Coucou</a>
		<br> <br>
		<?php echo($_GET["message"]); ?>
		
		<hr>
		
		<h1>Ex 2 - 3</h1>
		<form method="POST">
			<label for="size">Size : </label>
			<input type="number" value="30" name="size">
			<label for="color">color : </label>
			<input type="string" value="black" name="color">
			<br><label for="message">message : </label>
			<textarea name="message" rows="8" cols="45"> votre message ici </textarea>
			<br><input type="submit" value="Valider">
		</form>
		
		<p style="font-size:<?php echo $_POST["size"];?>px; color:<?php echo $_POST["color"];?> "> Voici le texte :"<?php echo $_POST["message"];?>" écrit en <?php echo $_POST["size"];?>  </p>
		
	</body>
</html>