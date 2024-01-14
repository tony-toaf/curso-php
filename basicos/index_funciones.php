<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	echo "funciones con php <br>";

	function saluda(){ echo "hola mundo en php desde funcion"; } //creando una funcion 
    saluda(); // llamdno una funcion 
    echo "<br>"; //salto de linea


    function paramtro($numero){
        $elnumero = $numero;
        echo "el numero por parametro es ". $elnumero;

    }
    paramtro(56);
	 ?>


</body>
</html>