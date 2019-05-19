<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="icon" type="imagenes/png" href="imagenes/descarga.png" />
	<title>REGISTRO</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body id="cuerpo_inicio">
	<div class="container" id="sesions">
		<div class="row">
			<div class="col-md-4" id="inicio">
				<form action="archivo_registrar.php" method="post">
					<div class="form-group" id="titulo"><strong>
						REGISTRARSE</strong>
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
						<button type="submit" class="btn btn-success"> Registrarse</button>
						<a class="btn btn-info" href="index.php" role="button">Volver</a>
					</center>
				</form>
				<br>
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
