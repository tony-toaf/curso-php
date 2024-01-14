<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<title>subir archivos</title>
</head>
<body>

	<!-- columna de subir archivos -->
	<form action="subiendo.php" method="post" enctype="multipart/form-data"> <!-- importante para que se de cuenta que son archivos -->

		<label for="">subir imagen</label><br>
		<input type="file" name="file"><br>

		<label for="">Descripsion del archivo</label><br>
		<input type="text" name="descripsion"><br>


		<label for=""></label>
		<input type="submit" value="subir" > 

	</form>



	</body>
	</html>