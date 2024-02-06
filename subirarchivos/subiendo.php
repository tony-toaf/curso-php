<?php
$local = "localhost"; // Ruta local
$db_usuario = "root"; // Usuario MySQL
$db_pass = "root"; // Contraseña MySQL
$db_nombre = "CURSO"; // Nombre de la base de datos

// CREAR UNA CONEXIÓN 
$conexion = mysqli_connect($local, $db_usuario, $db_pass, $db_nombre);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se han subido archivos

    if (!empty($_FILES['files']['name'][0])) {

        // Loop a través de todos los archivos
        for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
            $file_name = $_FILES['files']['name'][$i]; // Obtener el nombre del archivo
            $file_tmp = $_FILES['files']['tmp_name'][$i]; // Obtener la ruta temporal del archivo
            $file_desc = $_POST['descripsion'][$i]; // Descripción del archivo

            // Guardar la imagen
            //$route = "img/" . $file_name; // Ruta completa	

			// Obtener la extensión usando explode
			$file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

			// Determinar la tabla de destino basándose en la extensión del archivo
			if (in_array($file_extension, array('jpg', 'jpeg', 'png', 'gif'))) {
			    $tabla_destino = "FOTOS";
			    $route = "img/" . $file_name; // Ruta completa    
			} elseif (in_array($file_extension, array('doc', 'docx', 'txt', 'xlsx', 'pdf'))) {
			    $tabla_destino = "ARCHIVOS";    
			    $route = "documentos/" . $file_name; // Ruta completa    
			}

            
            // Insertar en la base de datos en la tabla correspondiente
            $sql = "INSERT INTO $tabla_destino (NOMBRE, DESCRIPSION) VALUES ('$file_name', '$file_desc')";
            mysqli_query($conexion, $sql);

            // Mover el archivo a la carpeta donde queremos guardarlo
            move_uploaded_file($file_tmp, $route);
        }

        echo "Se subieron los archivos exitosamente";
    } else {
        echo "Error: No se han subido archivos";
    }
} else {
    echo "Error: Se esperaba una solicitud POST";
}

// Cerrando la conexión
mysqli_close($conexion);
?>
