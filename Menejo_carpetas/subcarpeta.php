<?php
// Creando subcarpetas

$carpeta_padre = $_POST['carpeta']; // Ruta de la carpeta padre seleccionada
$nombre_carpeta = $_POST['creando']; // Nombre de la nueva subcarpeta

// Definir la ruta completa de la nueva subcarpeta
$ruta = $carpeta_padre . '/' . $nombre_carpeta;

// Verificar si la ruta completa de la nueva subcarpeta 
if (!file_exists($ruta)) {
    // Crear la subcarpeta
    mkdir($ruta);
    echo "Subcarpeta '$nombre_carpeta' creada correctamente en '$carpeta_padre'.";
} else {
    // Mostrar mensaje si la carpeta ya existe
    echo "La subcarpeta '$nombre_carpeta' ya existe en '$carpeta_padre'.";
}
?>
