<?php
include "header.php";
?>

<?php
include("fichier.php");
?>
	
	<h1> Créer un tableau :</h1>
	
	<form method="POST" >
		<label for="l">Lignes : </label>
		<input type="number" value="" name="l">
		<label for="c">Colonnes : </label>
		<input type="number" value="" name="c">
		<input type="submit" value="Création du tableau">
	</form>
	<br>
	  
	<?php
		$nbLignes=$_POST["l"]??10;
		$nbColonnes=$_POST["c"]??10;
		createHtmlTables($nbLignes,$nbColonnes);
	?>
	
<?php
include "footer.php";
?>