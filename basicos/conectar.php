<?php 

$local="localhost";
$db_usuario="root";
$db_pass="root";
$db_nombre="PRUEBA";

	// CREAR UNA CONCECCION 
$conexion  = mysqli_connect($local, $db_usuario, $db_pass, $db_nombre);

	// CREAR UNA CONSULTA Y UTILIZAR LA TABLA DE LA BASE
$consulta = "SELECT * FROM DATOSPERSONALES";



	// DEBEMOS OBTENER LOS RESULTADOS
$resultado = mysqli_query($conexion, $consulta);


	// OBTENER LOS DATOS Y GUARDARLOS EN UN ARRAY 
$fila = mysqli_fetch_row($resultado);

	// IMPRIMIR LOS DATOS DEL ARRAY USANDO LO BASICO



?>		