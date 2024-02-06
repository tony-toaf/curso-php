<?php
$ruta = $_POST['carpeta']; // Reemplaza esto con la ruta de tu directorio

if (isset($_POST['listar'])) {

// Escapamos la ruta para evitar posibles ataques
    $ruta = realpath($ruta);

// Verificamos si la ruta existe y es un directorio
    if ($ruta !== false && is_dir($ruta)) {

        $contenido = scandir($ruta);

    // Filtramos solo los directorios (excluyendo . y ..)
        $carpetas = array_filter($contenido, function($item) use ($ruta) {
            return is_dir($ruta . '/' . $item) && $item != "." && $item != "..";
        });

    // Imprimimos la lista de carpetas
        echo "LISTA DE CARPETAS $ruta:<br>";
        echo "<ul>";
        foreach ($carpetas as $carpeta) {
            echo "<li>$carpeta</li>";
        }
        echo "</ul>";
    } else {
        echo "La ruta no es válida o no es un directorio.";
    }

}





?>
