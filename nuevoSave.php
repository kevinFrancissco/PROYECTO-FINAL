<?php
	//recibo variables
include('conexion.php');
	
	$nombre = $_POST['nombre'];
	$ap1 = $_POST['ap1'];
	$ap2 = $_POST['ap2'];
	$edad=$_POST['edad'];
	$fechaNacimiento=$_POST['fechaNacimiento'];
	$Redes=$_POST['Redes'];
	$email = $_POST['email'];
	$telefono=$_POST['telefono'];

	
	$sql="INSERT INTO usuarios (nombre, ap1, ap2, edad, fechaNacimiento, Redes, email, telefono) VALUES
		('$nombre', '$ap1', '$ap2', '$edad', '$fechaNacimiento', '$Redes', '$email', '$telefono')";

		//Validar que este bien hecha la consultas $sql
		//die($sql);
	
		$resultado = $con2->query($sql);
		header("Location: index.php");
?>