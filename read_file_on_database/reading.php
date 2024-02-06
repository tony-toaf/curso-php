<?php
$local = "localhost"; // Ruta local
$db_usuario = "root"; // Usuario mysql
$db_pass = "root"; // Contraseña mysql 
$db_nombre = "CURSO"; // Nombre de la base de datos

$conexion = mysqli_connect($local, $db_usuario, $db_pass, $db_nombre);

$numero  = $_POST['numero']; // Rescatando la variable

$tabla = "FOTOS"; // Cambia esto por el nombre correcto de la tabla
$consulta = "SELECT * FROM `$tabla`";

$resultado = mysqli_query($conexion, $consulta);

// Verificar si la consulta fue exitosa
if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

// Imprimir encabezados de la tabla
echo "<table border='1'>";
echo "<tr>";
$fila = mysqli_fetch_assoc($resultado);
foreach ($fila as $campo => $valor) {
    echo "<th>$campo</th>";
}
// Agrega una columna adicional para el enlace de descarga
echo "<th>Descargar</th>";
echo "</tr>";

mysqli_data_seek($resultado, 0);

// Imprimir datos de la tabla
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    foreach ($fila as $campo => $valor) {
        echo "<td>$valor</td>";
    }
    $archivo_ruta = $fila["ruta"];
    // Comprobar si el archivo existe antes de mostrar el enlace de descarga
    if (file_exists($archivo_ruta)) {
        // Agrega la línea para el enlace de descarga
        echo '<td><a href="' . $archivo_ruta . '" download>Descargar</a></td>';
    } else {
        echo '<td>Archivo no encontrado</td>';
    }
    echo "</tr>";
}

echo "</table>";

mysqli_close($conexion);
?>
