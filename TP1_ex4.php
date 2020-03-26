<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ex 4</title>
	</head>
	<body>
	
	<table border='1'>
    <tbody>
       
	   <tr>
			<?php
			
			$nbcolonnes=0;
			while($nbcolonnes<$_GET["nbc"])
			{
				echo '<td>1-1</td>';
				$nbcolonnes = $nbcolonnes +1;
			}
			?>
        </tr>
    
	</tbody>
	</table>
	


	</body>
</html>