<?php
include "header.php";
?>
	
<?php
include("fichier.php");
?>
	
<?php
$titre =' ';
$contenu =' ';
$niveau=1;
parseElements($titre,$contenu,$niveau);
?>
	
<?php
include "footer.php";