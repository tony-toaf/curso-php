<?php 
require 'peticion.php';

//see crea la instancia de la clase que devuelve los paises  

$pais = new DevuelvePaises();

$array_paises = $paises->get_paises();


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>

	<?php 
	foreach (array_paises as $elemento){

		echo "<table><tr><td>"; 
		echo $elemento['NOMBRE'] 
		echo $elemento['CAPITAL']		
		echo $elemento['PAISDEORIGEN']."</td><td></tr></table>";	

		echo "<br>";


	}


	?>

	
	</body>
	</html>