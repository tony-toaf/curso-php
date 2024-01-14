<?php 
	
$local="localhost"; //ruta local
	$db_usuario="root"; //usuario mysql
	$db_pass="root"; //contrasegn mysql 
	$db_nombre="CURSO"; //nombr ede la base de datos

	

	// CREAR UNA CONCECCION 
	$conexion  = mysqli_connect($local, $db_usuario, $db_pass, $db_nombre);

	$el_usuario = mysqli_real_escape_string($conexion, $_GET['use']); // crearla despues para poder utilizar la funcion fijarse que requiere la conexion
	$la_contra = mysqli_real_escape_string($conexion, $_GET['con']);


	if (mysqli_connect_errno()) {
		echo "la conexion a fallado";
		exit();
	}

	// CREAR UNA CONSULTA Y UTILIZAR LA TABLA DE LA BASE
	$consulta = "DELETE  FROM USUARIOS WHERE NOMBRE = '$el_usuario' AND PASS = '$la_contra'";  //cambiar los parametros para obtenet otros datos

	
	if (myqli_query($conexion, $consulta)) {
			echo "completado";
		}




?>	