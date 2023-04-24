<?php
	$id = $_GET['id'];
	include('conexion.php');
	$sql = 'SELECT * FROM usuarios WHERE id ='.$id;
	$resultado = $con2->query($sql);
	$resultado = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<style>
		label{
			font-size: Algerian;
			color: blue;
		}
	</style>
	<title>Editar</title>
</head>
<body>
	<form  action="save.php" method="POST">
		<div class="row" >
			<div class="col-8">
				<input type="text"class="form-control" name = "id" id="id" required value="<?php echo $resultado['id']; ?>" hidden>
			</div>
		</div>
		<div class="row" >
			<div class="col-8">
				<label for="Nombre">Nombre</label>
				<input type="text"class="form-control" name = "nombre" id="nombre" required value="<?php echo $resultado['nombre']; ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-8">
			<label for="AP1">Apellido Paterno</label>
			<input type="text" class="form-control"name = "ap1"id="ap1" required value="<?php echo $resultado['ap1']; ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-8">
			<label for="AP2">Apellido Materno</label>
			<input type="text"class="form-control" name = "ap2"id="ap2" required value="<?php echo $resultado['ap2']; ?>">
			</div>
			</div>
		<div class="row">
			<div class="col-8">
			<label for="AP2">edad</label>
			<input type="text"class="form-control" name = "edad"id="edad" required value="<?php echo $resultado['edad']; ?>">
			</div>
			</div>
		<div class="row">
			<div class="col-8">
			<label for="AP2">Fecha de Nacimiento</label>
			<input type="date"class="form-control" name = "Fecha"id="Fecha" required value="<?php echo $resultado['fechaNacimiento']; ?>">
			</div>
			</div>
		<div class="row">
			<div class="col-8">
			<label for="AP2">Redes</label>
			<input type="text"class="form-control" name = "Redes"id="Redes" required value="<?php echo $resultado['Redes']; ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-8">
			<label for="email">Email</label>
			<input type="email"class="form-control" name = "email"id="email" required value="<?php echo $resultado['email'];
			 ?>">
			 </div>
			 </div>
		<div class="row">
			<div class="col-8">
			<label for="AP2">Telefono</label>
			<input type="text"class="form-control" name = "Telefono"id="Telefono" required value="<?php echo $resultado['telefono']; ?>">
			</div>

		</div>
		<button type="submit">Editar</button>
	</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>
