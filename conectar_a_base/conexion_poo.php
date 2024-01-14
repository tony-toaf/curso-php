<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>s</h1>

	<?php 
	echo "todo bien";
	$conexion = mysqli ("localhost", "root", "root", "CURSO"); //datos de la base

	if ($conexion->connect_errno) {
		echo "fallo la conexion " . $conexion->connect_errno;

	}




	//mysqli_set_charset($conexion, "utf8"); //forma de establecer la codifcacion

	$conexion->set_charset("utf8";

	$sql = "SELECT * FROM PAISES";

	//realizando peticion con irientadoa objetos

	$resultado = $conexion->query($sql);


	//verificar que no aya errores

	if ($conexion->erron) {
		die($conexion->error);


	}

	while($fila = $resultado->fetch_assoc()){
		echo "<table> <tr> <td>";

		echo $fila ['PAIS',] . "</td> </td>";
		echo $fila ['CAPITAL',] . "</td></td> </tr></table>";}



	$conexion->close();
		?>

	</body>
	</html>