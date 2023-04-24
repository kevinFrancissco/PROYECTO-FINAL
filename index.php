<?php
   include('conexion.php')
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<title>Document</title>
	<style>
		a{
			color: black;
			background-color:yellow;
			padding:8px 8px;
			text-align: center;
			font-size:18px;
			border-radius:9px;
		}
	</style>
	<script src="funcion.js"></script>
</head>
<body style="max-width: 80%; margin: auto;">
	<div class="row">
		<div class="col-10">
			<h2>Tabla de Usuarios</h2>
		</div>
		<div class="col-2">
			<button type="button" class="btn btn-primary" onclick="agregar()">Agregar</button>
		</div>
	</div>
     
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">id</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Apellido Materno</th>
	      <th scope="col">Apellido Paterno</th>
	      <th scope="col">Edad</th>
	      <th scope="col">Fecha de Nacimiento</th>
	      <th scope="col">Redes</th
	      <th scope="col">Email</th>
	      <th scope="col">Telefono</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php
	  		  foreach ($resultado as $r) { ?>
	  		  	<tr>
	  		  		<td><?php echo $r['id']; ?></td>
	  		  		<td><?php echo $r['nombre']; ?></td>
	  		  		<td><?php echo $r['ap1']; ?></td>
	  		  		<td><?php echo $r['ap2']; ?></td>
	  		  		<td><?php echo $r['edad']; ?></td>
	  		  		<td><?php echo $r['fechaNacimiento']; ?></td>
	  		  		<td><?php echo $r['Redes']; ?></td>
	  		  		<td><?php echo $r['email']; ?></td>
	  		  		<td><?php echo $r['telefono']; ?></td>
	  		  		<td>
		  		  		<a href="<?php echo 'editUser.php?id='.$r['id'];?>">✎</a>
		  		  		<button type="button" class="btn btn-danger" onclick ="eliminar(<?php echo $r['id'];?>)">🗑</button>
	  		  		</td>
	  		  	</tr>  
            <?php }?>
	</table>
	<script>
		function agregar(){
			window.location.replace('insertar.php');
		}
		function eliminar(a){
			var confirmacion = confirm("¿Está seguro?");
			if (confirmacion == true) {
				window.location.replace('deleteUser.php?id='+a);
			}
		}
	</script>
</body>
</html>
