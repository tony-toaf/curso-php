<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php

	try{
		
		
		$base = new PDO("mysql:host=localhost; dbname=CURSO" , "root", "root");

		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM USUARIOS_PASS WHERE USUARIOS = :login AND PASSWORD = :password";


		$resultado = $base->prepare($sql);


		// rescatando las variables del login 
		$login = htmlentities(addslashes($_POST["login"]));
		$password = htmlentities(addslashes($_POST["password"]));

		// adginando valores a los marcadores

		$resultado->bindValue(":login", $login);
		$resultado->bindValue(":password", $password);

		// ejecutando la operacion 
		$resultado->execute();


		// verificando si el usuario existe en la base de datos

		$numero_registro=$resultado->rowCount();

		if ($numero_registro !=0 ) {
			
			session_start();

			$_SESSION['usuario']=$_POST['login'];

			header("Location:usuarios_registrados.php");
			
		

		}else{
			header("Location:login.php");
			
		}


}catch(Exception $e){ //en caso de error


	die("Error: " . $e->getMessage());


}
?>
</body>
</html>