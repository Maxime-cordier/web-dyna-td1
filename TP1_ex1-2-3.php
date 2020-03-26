<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Hello</title>
	</head>
	<body>
		<p> ex 1</p>
		<?php echo("Hello world !"); ?>
		<br>
		
		<p>ex 2 - 3</p>
		<form method="POST">
			<label for="size">Size : </label>
			<input type="number" value="<?php echo $_POST["size"];?>" name="size">
			<label for="color">color : </label>
			<input type="string" value="<?php echo $_POST["color"];?>" name="color">
			<br><label for="message">message : </label>
			<textarea name="message" rows="8" cols="45"> votre message ici </textarea>
			<input type="submit" value="Valider">
		</form>
		<p style="font-size:<?php echo $_POST["size"];?>px; color:<?php echo $_POST["color"];?> "> ce texte :"<?php echo $_POST["message"];?>" est écrit en <?php echo $_POST["size"];?>  </p>
		
	</body>
</html>