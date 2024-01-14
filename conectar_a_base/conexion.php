<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<!-- video 36 pildoras informaticas -->
	<h1 style="text-align:center;">conectar con una base de datos</h1>
<!-- para concectar a una ase de datos se necesitan 

	Direccion= local
	usuario= root, pass de sql
	contrasegna = la contrasegna de sql 
	nombre_base = "el nombre"
-->

<?php 

require("datos_conexion.php");

	// CREAR UNA CONCECCION 
$conexion  = mysqli_connect($local, $db_usuario, $db_pass, $db_nombre);

	// CREAR UNA CONSULTA Y UTILIZAR LA TABLA DE LA BASE
$consulta = "SELECT * FROM DATOSPERSONALES";

	// DEBEMOS OBTENER LOS RESULTADOS
$resultado = mysqli_query($conexion, $consulta);

	// OBTENER LOS DATOS Y GUARDARLOS EN UN ARRAY 
$fila = mysqli_fetch_row($resultado);

	// IMPRIMIR LOS DATOS DEL ARRAY USANDO LO BASICO
echo "user: " . $fila[0];
echo "<br>";
echo "pass: " . $fila[1];



?>	

</body>
</html>