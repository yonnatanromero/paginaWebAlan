<?php

	require '../resources/conf.php';

	$identificacion = $_POST['identificacion'];
	$nombres = $_POST['nombres'];
	$sexo = $_POST['sexo'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$direccion = $_POST['direccion'];
	$perfil = $_POST['perfil'];
	$desde = $_POST['desde'];
	$hasta = $_POST['hasta'];


	$editar = "UPDATE perfiles SET identificacion = '$identificacion' , nombre = '$nombres' , sexo = '$sexo' , telefono = '$telefono' , correo = '$correo' , direccion = '$direccion' , perfil = '$perfil' , desde = '$desde' , hasta = '$hasta' ";
	$resultado = mysql_query($editar);
	echo "<script type=\"text/javascript\">alert('Se han actualizado sus datos'); window.location='../editar_prestador.php';</script>";

?>