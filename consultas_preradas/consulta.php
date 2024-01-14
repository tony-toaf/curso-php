<?php 

	$local="localhost"; //ruta local
	$db_usuario="root"; //usuario mysql
	$db_pass="root"; //contrasegn mysql 
	$db_nombre="CURSO"; //nombr ede la base de datos


	// CREAR UNA CONCECCION 
	$conexion  = mysqli_connect($local, $db_usuario, $db_pass, $db_nombre);
	if (mysqli_connect_errno()) {
		echo "fallo la conexion";
	}else{
		$country = mysqli_real_escape_string($conexion, $_GET['pais']);


		//1 APASO CREAR LA SENTENCIA SQL
		$sql = "SELECT NOMBRE, CAPITAL FROM PAISES WHERE NOMBRE=?";

		// 2 PASO CREAR PREPARAR LA CONSULTA 

		$resultado = mysqli_prepare($conexion, $sql);



	// DEBEMOS OBTENER LOS RESULTADOS
		

	// OBTENER LOS DATOS Y GUARDARLOS EN UN ARRAY 
		$fila = mysqli_fetch_row($resultado);	

	// IMPRIMIR LOS DATOS DEL ARRAY USANDO LO BASICO
		echo "user: " . $fila[0];
		echo "<br>";
		echo "pass: " . $fila[1];
	}

	

?>