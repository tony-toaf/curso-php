<!DOCTYPE html>
<html lang="us">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<!-- video 43 -->
<?php 
require "insertar.php";
$usuario = $_GET["usuario"]; //obtener la parte del name del input de html
$pass = $_GET["password"];

$local="localhost"; //ruta local
	$db_usuario="root"; //usuario mysql
	$db_pass="root"; //contrasegn mysql 
	$db_nombre="PRUEBA"; //nombr ede la base de datos

	// CREAR UNA CONCECCION 
$conexion  = mysqli_connect($local, $db_usuario, $db_pass, $db_nombre);

$consulta = "INSERT INTO USUARIOS (USER, PASS ) VALUES ('$usuario','$pass')"; //LINEA PARA AGNADIR
$resultado = mysqli_query($conexion, $consulta);
mysqli_close($conexion);


?>	


</body>
</html>
</html>

