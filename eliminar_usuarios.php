<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="imagenes/png" href="imagenes/descarga.png" />
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
				<div class="btn btn-success">eliminar usuarios </div>
				<div class="panel panel-body">

			<form action="eliminar.php" method="POST">
	          <label>  Ingresa id de usuario</label>
						<input ttype="text" name="eliminar" class="form-control input-sm" id="estudiante" required required >

						<div class="invalid-feedback">

		          </div>
						<p></p>
            <input type="submit" class="btn btn-default" value="eliminar registro" name="eliminador">
            	<a href="cotecnova_parqueadero.php" class="btn btn-default"required="true">retroceder</a>
            </form>
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
