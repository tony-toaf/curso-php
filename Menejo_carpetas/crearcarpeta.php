<?php
//inicio de codigo para crear una unica carpeta
//include "gestorcarpetas.php"; //obteniendo los datos de gestor de carpetas

$carpetas = array_filter(glob('*'), 'is_dir');

if (isset($_POST['submit'])) {
    $nombre_carpeta = $_POST['creando'];

    // Verificar si la carpeta no existe antes de crearla
    if (!file_exists($nombre_carpeta)) {
        mkdir($nombre_carpeta);
        echo "Carpeta '$nombre_carpeta' creada correctamente.";
    } else {
        echo "La carpeta '$nombre_carpeta' ya existe.";
    }
}


?>

