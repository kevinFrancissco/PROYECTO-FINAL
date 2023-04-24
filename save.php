<?php
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$ap1 = $_POST['ap1'];
	$ap2 = $_POST['ap2'];
	$edad=$_POST['edad'];
	$fechaNacimiento=$_POST['fechaNacimiento'];
	$Redes=$_POST['Redes'];
	$email = $_POST['email'];
	$telefono=$_POST['telefono'];

	include('conexion.php');
	$sql1 = "UPDATE usuarios SET nombre='$nombre', ap1 ='$ap1', ap2='$ap2', edad='$edad', fechaNacimiento='$fechaNacimiento', Redes='$Redes', email='$email', telefono='$telefono'  WHERE id=".$id; 
	if (mysqli_query($con2,$sql1)) {
		echo "Registro actualizado"; 
		header("Location: index.php");
	}
	else{
		echo "No se pudo";
	}

?>