<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivos</title>
</head>
<body>

<form action="subiendo.php" method="post" enctype="multipart/form-data">
    <label for="file">Seleccionar Archivo:</label>
    <input type="file" name="files[]" id="file" enctype="multipart/form-data">
    <br>
    <label for="description">Descripción:</label>
    <input type="text" name="description[]" id="description">
    <br>
    <label for="folder">Seleccionar Carpeta:</label>
    <select name="folder">
        
        <option value="carpeta1">Carpeta 1</option>
        <option value="carpeta2">Carpeta 2</option>
        <!-- Puedes agregar más opciones según sea necesario -->
    </select>
    <br>
    <input type="submit" value="Subir Archivos" name="submit">
</form>

</body>
</html>
