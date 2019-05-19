<?php
$server = "localhost";
$usuario= "root";
$contraseña ="camilo1998";
$db = "parqueadero";
$conexion=mysqli_connect('localhost','root','camilo1998','parqueadero') or die ('Error al conectar con la base de datos');


  if (isset($_POST['estudiante']) && isset($_POST['placa'])&& isset($_POST['codigo'])){

    $codigo=$_POST['codigo'];
    $estudiante=$_POST['estudiante'];
    $placa=$_POST['placa'];

    $ingresar=mysqli_query($conexion,'INSERT INTO placa_vehiculo(codigo,nombre,nregistro) values
    ("'.$codigo.'","'.$estudiante.'","'.$placa.'")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
     header();
  }else {
    header();
  }
 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  	<title>REGISTRO</title>
  	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  	<link rel="stylesheet" href="css/estilo.css" type="text/css">
    <meta charset="utf-8">
  </head>
  <body>
<div class="col-md-4" id="aa">
  <p>registrado con exito</p>
    	<a href="cotecnova_parqueadero.php" class="btn btn-default"required="true">retroceder</a>
</div>


	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
  </body>
</html>
