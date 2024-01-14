<?php
$local = "localhost"; // Ruta local
$db_usuario = "root"; // Usuario MySQL
$db_pass = "root"; // Contraseña MySQL
$db_nombre = "CURSO"; // Nombre de la base de datos

// CREAR UNA CONEXIÓN 
$conexion  = mysqli_connect($local, $db_usuario, $db_pass, $db_nombre);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file_descriptions = $_POST['descripsion'];
    $files = $_FILES['files'];

    // Loop a través de todos los archivos
    for ($i = 0; $i < count($files['name']); $i++) {
        $file_name = $files['name'][$i];
        $file_tmp = $files['tmp_name'][$i];
        $file_desc = $file_descriptions[$i];

        // Ruta para guardar el archivo
        $route = "img/" . $file_name;

        // Verificar el tipo de archivo permitido
        $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif', 'pdf');
        $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_extension, $allowed_extensions)) {
            die("Error: El archivo $file_name no es un tipo permitido.");
        }

        // Insertar en la base de datos
        $sql = "INSERT INTO FOTOS (NOMBRE, DESCRIPSION) VALUES ('$file_name', '$file_desc')";
        mysqli_query($conexion, $sql);

        // Mover el archivo a la carpeta destino
        move_uploaded_file($file_tmp, $route);
    }

    echo "Se subieron los archivos exitosamente";
} else {
    echo "Error: Se esperaba una solicitud POST";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
