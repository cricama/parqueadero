<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
    //se muestra el contenido de la página web
?>
<!DOCTYPE html>
<html lang="en">
  <head>

		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="icon" type="imagenes/png" href="imagenes/descarga.png" />
    <title>Ingresar</title>
  	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  	<link rel="stylesheet" href="css/estilo.css" type="text/css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>cotecnova parqueadero</title>
    <div id="centro12" class="alert alert-secondary  list-group-item-warning">
      <div id="centro1">
                    <a href="registro1.php" class="btn list-group-item-warning">Registro Usuario</a>
      </div>
      <div id="centro2">
          <a href="eliminar_usuarios.php" class="btn list-group-item-warning">eliminar usuarios</a>
      </div>
      <div id="centro3">
          <a href="actualizar_datos_de_usuarios.php" class="btn list-group-item-warning">actualizar usuarios</a>
      </div>

      <div id="centro4">
          <a href="registros.php" class="btn list-group-item-warning">lista de usuarios</a>
      </div>
      <div id="centro13">
        	<a href="cotecnova_parqueadero.php" class="btn list-group-item-warning"required="true">inicio de sesion</a>
      </div>
      <div id="centro14">
       	<a class="btn list-group-item-warning">
       <script type="text/javascript">
       function startTime(){
       today=new Date();
       h=today.getHours();
       m=today.getMinutes();
       s=today.getSeconds();
       m=checkTime(m);
       s=checkTime(s);
       document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
       t=setTimeout('startTime()',500);}
       function checkTime(i)
       {if (i<10) {i="0" + i;}return i;}
       window.onload=function(){startTime();}
       </script>
       </a>
       <div id="reloj"  style="font-size:20px;"></div>

    </div>
    <body style="background-color:#00CED1;">

  <div>
    <IMG id="centro11" src="imagenes/descarga.png">
  </div>
    </div>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a id="centro15" href="cerrar_sesion.php" class="btn list-group-item-warning"required="true">Salir</a>
        </div>
      </div>
    </div>
    <div  id="centro">

<h1 id="centro">¡Bienvenido <?php print $_SESSION['name'];?>!</center> </h1><br><br>

    </div>
    <div id="centro16" class="list-group-item list-group-item-warning">
 <p>© 2019 cotecnova  Dirección: Cl. 10 #3-95, Cartago, Valle del Cauca
 Fundación: 21 de septiembre de 1971
 Teléfono: (2) 2111804
 Todos los derechos reservados.
 Desarrollado por cristian camilo martinez</p>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: ./');
}
?>
