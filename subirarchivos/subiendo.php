<?php 

$local="localhost"; //ruta local
	$db_usuario="root"; //usuario mysql
	$db_pass="root"; //contrasegn mysql 
	$db_nombre="CURSO"; //nombr ede la base de datos



	// CREAR UNA CONCECCION 
$conexion  = mysqli_connect($local, $db_usuario, $db_pass, $db_nombre);

$file_name = $_FILES['file']['name'];  //para obtener el nobmre del archivo que carga en el input

$file_tmp = $_FILES['file']['tmp_name'];  //tmp_name obtiene la ruta temporal del archivo 

$file_desc  = $_POST['descripsion'];


//done guardamos la imagen
$route = "img/".$file_name; //darle el nombre del archivo primer vvariable


$sql = "INSERT INTO FOTOS (NOMBRE, DESCRIPSION) VALUES ('$file_name', '$file_desc')";

move_uploaded_file($file_tmp, $route);

mysqli_query($conexion, $sql);

echo "se subio el archivos";
 ?>
