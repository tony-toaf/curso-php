<?php
// Escapamos la ruta para evitar posibles ataques
$ruta = isset($_POST['carpeta']) ? realpath($_POST['carpeta']) : null;

if (isset($_POST['listar']) && $ruta) {

    // Verificamos si la ruta existe y es un directorio
    if ($ruta !== false && is_dir($ruta)) {

        $contenido = scandir($ruta);

        // Filtramos solo los directorios (excluyendo . y ..)
        $carpetas = array_filter($contenido, function ($item) use ($ruta) {
            return is_dir($ruta . '/' . $item) && $item != "." && $item != "..";
        });

        // Imprimimos la lista de carpetas y agregamos el formulario de subcarpetas
        echo "<h3>LISTA DE CARPETAS</h3>";
        echo "<ul>";
        foreach ($carpetas as $carpeta) {
            echo "<li>$carpeta";
            // Formulario para crear subcarpetas en esta carpeta
            echo "<form action='' method='post' style='display:inline;'>";
            echo "<input type='hidden' name='carpeta_padre' value='" . htmlspecialchars($ruta . '/' . $carpeta) . "'>";
            echo " <input type='text' name='nombre_subcarpeta' placeholder='Nombre Sub Carpeta' required>";
            echo " <input type='submit' value='Crear Sub Carpeta' name='crear_subcarpeta'>";
            echo "</form>";
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "La ruta no es válida o no es un directorio.";
    }
}

// Procesar la creación de subcarpetas
if (isset($_POST['crear_subcarpeta'])) {
    $carpeta_padre = $_POST['carpeta_padre'];
    $nombre_subcarpeta = $_POST['nombre_subcarpeta'];

    $nueva_ruta = $carpeta_padre . '/' . $nombre_subcarpeta;

    // Verificar si la subcarpeta no existe antes de crearla
    if (!file_exists($nueva_ruta)) {
        mkdir($nueva_ruta);
        echo "Subcarpeta '$nombre_subcarpeta' creada correctamente en '$carpeta_padre'.<br>";
    } else {
        echo "La subcarpeta '$nombre_subcarpeta' ya existe en '$carpeta_padre'.<br>";
    }
}
?>
