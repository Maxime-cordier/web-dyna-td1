<html>
	<head>
		<meta charset="UTF-8">
		<title>Ex 5</title>
	</head>
	<body>
	<?php
		function createHtmlTables($nbLignes,$nbColonnes)
	{?>
	<table border='1'>
			<tbody>
				<?php 
				for($i=0;$i<$nbLignes;$i++)
				{?>
					<tr>
					<?php for($j=0;$j<$nbColonnes;$j++)
					{?>
						<td><?="$i - $j"?></td>
					<?php }?>
					</tr>
				<?php }?>
	<?php } ?>
	
	<?php
		function element($titre,$contenu,$niveau=1)
	{?>
	<h-niveau>titre</h-niveau>
	<div>contenu</div>	
	<?php } ?>
	
	
	
	
	</body>
</html>