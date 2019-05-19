<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
    header ('location: cotecnova_parqueadero.php');
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
<link rel="icon" type="imagenes/png" href="imagenes/descarga.png" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Ingresar</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body id="cuerpo_inicio">

	<div class="container" id="sesions">
		<div class="row">
			<div class="col-md-4" id="inicio">

				<!-- Si la session no esta iniciada -->
				<form action="validador.php" method="post">
					<div class="form-group" id="titulo"><strong>
						INICIAR SESION</strong>
					</div>
					<div class="form-group">
						<label for="usu"><strong> Usuario:</strong></label>
						<input class="form-control" id="usu" type="text" name="txtlogin" required="true">
					</div>

					<div class="form-group">
						<label for="pass"><strong> Contraseña:</strong></label>
						<input class="form-control" id="pass" type="password" name="txtpass" required="true">
					</div>
					<center>
						<button type="submit" class="btn btn-success"> iniciar</button>
						<a class="btn btn-info" href="registro.php" role="button">Registrarse</a>
					</center>
				</form>
				<br>

				<!-- Si la session esta iniciada -->

				<div class="msg" id="msg">

				</div>
			</div>
		</div>
	</div>


	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
</body>
</html>
