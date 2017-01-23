<?php

	require '../resources/conf.php';

	$id = $_POST['id'];
	$id_cliente = $_POST['identificacion-cliente'];
	$nombre_cliente = $_POST['nombre-cliente'];
	$telefono_cliente = $_POST['telefono-cliente'];
	$correo_cliente = $_POST['correo-cliente'];
	$otros = $_POST['otros'];


	$reservar = "INSERT INTO reservar_prestador ( prestador_id , identificacion , nombre , telefono , correo , otros )"	. "VALUES ( '$id' , '$id_cliente' , '$nombre_cliente' , '$telefono_cliente' , '$correo_cliente' , '$otros' )";
	$resultado_reservar = mysql_query($reservar);
	echo '<script> alert("Has reservado, Recibiras un correo con los datos."); </script>';
	echo"<script type=\"text/javascript\"> window.location='../index.php';</script>";



?>