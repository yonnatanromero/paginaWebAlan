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


	$consultar = "SELECT identificacion FROM perfiles WHERE identificacion = '$identificacion' ";
	$resultado_consultar = mysql_query($consultar);
	$row = mysql_fetch_array($resultado_consultar);

	if ($row['identificacion'] > 0) {
		echo '<script> alert("El numero de Identificacion ya existe."); </script>';
    	echo '<script> window.location="../nuevo-prestador.php"; </script>';
	}

	else {


		$sql = "INSERT INTO perfiles ( identificacion , nombre , sexo , telefono , correo , direccion , perfil , desde , hasta )" . "VALUES ( '$identificacion' , '$nombres' , '$sexo' , '$telefono' , '$correo' , '$direccion' , '$perfil' , '$desde' , '$hasta')";
		$result = mysql_query($sql);
		echo '<script> alert("Registrado."); </script>';
		echo"<script type=\"text/javascript\"> window.location='../nuevo-prestador.php';</script>";

	}

?>