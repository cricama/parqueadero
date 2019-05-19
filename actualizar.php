<?php

$server = "localhost";
$usuario= "root";
$contraseña ="camilo1998";
$db = "parqueadero";
$conexion=mysqli_connect('localhost','root','camilo1998','parqueadero') or die ('Error al conectar con la base de datos');

$codigo = $_POST['codigo'];
$nombre= $_POST['estudiante'];
$nregistro = $_POST['placa'];

mysqli_query($conexion,"UPDATE placa_vehiculo set nombre='$nombre'where codigo='$codigo'") or die ('Error al conectar con la base de datos');
mysqli_close($conexion);echo "datos del usuarios actualizados";

 ?>
