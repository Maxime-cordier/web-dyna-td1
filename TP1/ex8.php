<?php
	include("header.php");
?>
<?php
	include("fichier.php");
?>
	
	<form method="POST" >
		<label for="txt">Frapper votre texte : </label> <br>
		<textarea name="message" rows="8" cols="49">Ecrivez votre texte ici</textarea>
		<br>
		<label for='choix'>Que voulez vous compter ? :</label> <br>
			<select name="choix" />
				<option value="1">Nombre de mots</option>
				<option value="2">Nombre de caractère X </option>
				<option value="3">Nombre de caractère totale </option>
				<option value="4">Afficher tout en minuscule </option>
				<option value="5">Afficher tout en majuscule </option>
				<option value="6">Afficher une majuscule a chaque mot </option>
				<option value="7">Afficher avec la couleur Y</option>
			</select>
		</label> <br> <br>
		<label for="crtr">(Si besoin rentrez le caractère X):</label>
		<input type="string" value="" name="crtr">
		<label for="crtr">(Si besoin rentrez la couleur Y en anglais):</label>
		<input type="string" value="" name="couleur">
		<br> <br> 
		<input type="submit" value="compter">
	</form>
	<br> <br>
	
	<?php 
	if($_POST['choix']==1){
		wordCount($_POST['message']);
	}
	if($_POST['choix']==2){
		charCount($_POST['message'], $_POST['crtr']);
	}
	if($_POST['choix']==3){
		longeur($_POST['message']);
	}
	if($_POST['choix']==4){
		minuscule($_POST['message']);
	}
	if($_POST['choix']==5){
		majuscule($_POST['message']);
	}
	if($_POST['choix']==6){
		premier($_POST['message']);
	}
	if($_POST['choix']==7){
	couleur($_POST['message'], $_POST['couleur']);
	}
	?>
	
<?php
	include("footer.php");
?>