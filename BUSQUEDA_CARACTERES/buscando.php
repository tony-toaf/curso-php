<?php 
	$obteniendo = $_GET['buscar']; //obteniendo el id del imput text del formulario

	$local="localhost"; //ruta local
	$db_usuario="root"; //usuario mysql
	$db_pass="root"; //contrasegn mysql 
	$db_nombre="PRUEBA"; //nombr ede la base de datos


	// CREAR UNA CONCECCION 
	$conexion  = mysqli_connect($local, $db_usuario, $db_pass, $db_nombre);

	// CREAR UNA CONSULTA Y UTILIZAR LA TABLA DE LA BASE
	$consulta = "SELECT * FROM DATOSPERSONALES WHERE EDAD LIKE '%$obteniendo%'"; //cambiar los parametros para obtenet otros datos

	// DEBEMOS OBTENER LOS RESULTADOS
	$resultado = mysqli_query($conexion, $consulta);

	// OBTENER LOS DATOS Y GUARDARLOS EN UN ARRAY 
	$fila = mysqli_fetch_row($resultado);

	// IMPRIMIR LOS DATOS DEL ARRAY USANDO LO BASICO
	echo "user: " . $fila[0];

	
	



?>	