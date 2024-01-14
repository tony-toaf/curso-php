<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivos</title>
</head>
<body>

<form action="procesar_archivos.php" method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple accept=".jpg, .jpeg, .png, .gif, .pdf">
    <br>
    Descripción: <input type="text" name="descripsion">
    <br>
    <input type="submit" value="Subir Archivos" name="submit">
</form>

</body>
</html>
