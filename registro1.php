<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="imagenes/png" href="imagenes/descarga(1).png" />
	<title>Registro</title>
	<?php require_once "scripts.php"; ?>
</head>
<body style="background-color: gray">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-danger">
				<div class="panel panel-heading">Registro de usuario</div>
				<div class="panel panel-body">

					<form action="registro_usuario_parqueadero.php" method="post">
						<label>codigo</label>
						<input type="text" name="codigo" class="form-control input-sm" id="estudiante" required >
	          <label>nombre de usuario</label>
						<input type="text" name="estudiante" class="form-control input-sm" id="estudiante" required >
						<label>placa de vehiculo</label>
						<input type="text" class="form-control input-sm" id="placa" name="placa"required>
						<div class="invalid-feedback">
			           Ingresa datos
		          </div>
						<p></p>

						<button type="submit" class="btn btn-success" required > Insertar Valores</button>
						<div style="text-align: right;">
							<a href="index.php" class="btn btn-default"required="true">retroceder</a>
						</div>
						</form>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
	<div>
	</div>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/jquery.min.js"></script>

	</body>

</div>

</html>
