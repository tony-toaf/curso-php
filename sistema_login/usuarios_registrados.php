<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	session_start();

	if (!isset($_SESSION['usuario'])) {
		header("Location:login.php");  //verifica si esta iniciada la secion

	}


	 ?>

	 <h1>usuarios registrados</h1>

	 <?php 

	 if ($_SESSION['usuario'] = 2) {
	 	echo "a iniciado secion juan";
	 	 echo "bienvenido " . $_SESSION['usuario']. "<br>"; 
	 }else{
	 	echo "ha iniciado secion otro usuario". $_SESSION['usuario']. "<br>"; 

	 }
	 

	 ?>



	
</body>
</html>