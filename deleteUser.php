<?php
//leer variable id
$id=$_GET['id'];
include('conexion.php');

$sql="Delete FROM usuarios WHERE id=".$id;
$resultado= $con2->query($sql);
header("Location: index.php");
?>
