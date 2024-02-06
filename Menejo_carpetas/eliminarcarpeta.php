<?php
if(isset($_POST['eliminar'])) {
    $carpeta_seleccionada = $_POST['carpeta'];

    // Eliminar la carpeta seleccionada
    if (is_dir($carpeta_seleccionada)) {
        rmdir($carpeta_seleccionada);
        echo "Carpeta '$carpeta_seleccionada' eliminada correctamente.";
    } else {
        echo "La carpeta '$carpeta_seleccionada' no existe o no es una carpeta válida.";
    }
}
?>
