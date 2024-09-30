<!DOCTYPE html>
<!-- codigo funcional para crear carpetas -->

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de Carpetas</title>
</head>
<body>



    <!-- Formulario para crear carpetas -->
    <form action="crearcarpeta.php" method="post">
        Nombre de la Carpeta: <input type="text" name="creando">
        <br>
        <label for="carpeta">Seleccionar Carpeta:</label>
        <select name="carpeta">
            <?php

                // Obtener la lista de carpetas en el directorio actual
            $carpetas = array_filter(glob('*'), 'is_dir');

        // Mostrar opciones en el select
            foreach ($carpetas as $carpeta) {
                echo "<option value='$carpeta'>$carpeta</option>";

            }
            ?>

        </select>
        <br>

        <input type="submit" value="Crear Carpeta" name="submit">
        <input type="submit" value="Crear Sub Carpeta" name="subcarpeta" formaction="subcarpeta.php">
        <input type="submit" value="Listar Archivos" name="listar" formaction="listarcarpetas.php">
        <input type="submit" value="Eliminar Carpeta" name="eliminar" formaction="eliminarcarpeta.php">

    </form>

</body>
</html>
