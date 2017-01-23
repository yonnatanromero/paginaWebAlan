<?php 

	require '../resources/conf.php';

	$identificacion = $_POST['identificacion'];
	$nombre = $_POST['nombre'];
	$usuario = $_POST['user'];
	$contraseña = $_POST['pass'];
	$telefono = $_POST['telefono'];


	$registro = "INSERT INTO usuarios ( identificacion , nombre , usuario , contraseña , telefono ) " . "VALUES ( '$identificacion' , '$nombre' , '$usuario' , '$contraseña' , '$telefono' ) ";
	$resultado = mysql_query($registro);

	echo '<script> alert("Te has registrado correctamente."); </script>';
	echo"<script type=\"text/javascript\"> window.location='../index.php';</script>";

?>