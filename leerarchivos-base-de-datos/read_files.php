<?php
$local = "localhost"; // Ruta local
$db_usuario = "root"; // Usuario mysql
$db_pass = "root"; // Contraseña mysql 
$db_nombre = "CURSO"; // Nombre de la base de datos

$conexion = mysqli_connect($local, $db_usuario, $db_pass, $db_nombre);

$numero  = $_POST['numero']; //rescatando la variable


$tabla = "FOTOS"; // Cambia esto por el nombre correcto de la tabla
$consulta = "SELECT * FROM `$tabla`";

$resultado = mysqli_query($conexion, $consulta);


// Verificar si la consulta fue exitosa
if (!$resultado) {
	die("Error en la consulta: " . mysqli_error($conexion));
}


$fila = mysqli_fetch_assoc($resultado);

// Imprimir encabezados de la tabla
echo "<table border='1'>";
echo "<tr>";
foreach ($fila as $campo => $valor) {
    echo "<th>$campo</th>";
}
echo "</tr>";


mysqli_data_seek($resultado, 0);

// Imprimir datos de la tabla
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    foreach ($fila as $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}

echo "</table>";

mysqli_close($conexion);
?>
