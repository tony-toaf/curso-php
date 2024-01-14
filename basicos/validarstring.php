<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>/h1>
    <table border="4">
        <tr>
            <th>Número</th>
            <th>Resultado</th>
        </tr>
        <?php
        $numero = 5;
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
        }
        ?>
    
</body>
</html>
