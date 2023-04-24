<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nuevo registro</title>
</head>
<body>
	<form action="nuevoSave.php" method="POST">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" id="nombre" required>

	<label for="ap1">Materno</label required>
	<input type="text" name="ap1" id="ap1">
	
	<label for="ap2">Materno</label required>
	<input type="text" name="ap2" id="ap2">


	<label for="ap1">Edad</label required>
	<input type="text" name="edad" id="edad">
	
	<label for="ap2">Fecha de Nacimiento</label required>
	<input type="text" name="fechaNacimiento" id="fechaNacimiento">

	<label for="ap1">Redes</label required>
	<input type="text" name="Redes" id="Redes">
	

	<label for="email">EMAIL</label>
	<input type="email" name="email" id="email">

	<label for="ap2">Telefono</label required>
	<input type="text" name="telefono" id="telefono">

	<button type="submit">Enviar</button>
	</form>
</body>
</html>
