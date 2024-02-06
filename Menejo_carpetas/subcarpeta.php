<?php
//creando sub carpetas

$carpeta_padre = $_POST['carpeta']; // Reemplaza esto con la ruta de tu directorio
$nombre_carpeta = $_POST['creando'];

$ruta = $carpeta_padre.'/'.$nombre_carpeta;

if (!file_exists($nombre_carpeta)) {
        mkdir($ruta);
        echo "Carpeta '$nombre_carpeta' creada correctamente.";
    } else {
        echo "La carpeta '$nombre_carpeta' ya existe.";
    }

?>
