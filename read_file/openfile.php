<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carpetas en el Escritorio de tony</title>
</head>
<body>

<h1>Carpetas en el Escritorio de tony</h1>

<?php
<?php
// Ruta de la carpeta que quieres listar
$ruta = '/var/www/html/curso/archivos';

// Abre el directorio
if ($gestor = opendir($ruta)) {
    // Lee los contenidos del directorio
    while (false !== ($archivo = readdir($gestor))) {
        // Excluye los directorios "." y ".."
        if ($archivo != "." && $archivo != "..") {
            echo $archivo . "<br>";
        }
    }

    // Cierra el gestor de directorios
    closedir($gestor);
}
?>
