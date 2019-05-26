<?php

$servidor = "localhost";
$usuario= "root";
$password = "camilo1998";
$base_datos = "parqueadero";



$conexion = new mysqli($servidor, $usuario, $password, $base_datos);


function formatearFecha($fecha){
	return date('g:i a', strtotime($fecha));
}


?>
