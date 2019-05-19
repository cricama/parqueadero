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
				<div class="btn btn-success">actualizar  usuarios </div>
				<div class="panel panel-body">


          <form  action="actualizar.php" method="post">
						<label>codigo</label>
            <input type="text" name="codigo" class="form-control input-sm" id="estudiante" required >

            <label>nombre de estudiante</label>
            <input type="text" name="estudiante" class="form-control input-sm" id="estudiante" required >
            <input type="submit" class="btn btn-default" value="actualizar registro" name="eliminador">
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
