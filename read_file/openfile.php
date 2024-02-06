
<?php //codigo que permite leer archivos guardados en carpetas 
//tener en cuenta los permisos de la carpeta
    

/* utilizar esta linea en el archivo a utilizar  <?php include 'openfile.php'; ?>*/

$directorio = 'archivos/'; // Cambia 'archivos/' por la ruta de tu directorio de archivos
if (is_dir($directorio)) {
    if ($dh = opendir($directorio)) {
        while (($archivo = readdir($dh)) !== false) {

            if ($archivo != '.' && $archivo != '..') {

                echo '<li><a href="' . $directorio . $archivo . '" download>' . $archivo . '</a></li>';
            }
        }
        closedir($dh);
    }
}
?>






