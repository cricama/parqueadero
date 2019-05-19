

<?php
$conexion=mysqli_connect('localhost','root','camilo1998','parqueadero') or die ('Error al conectar con la base de datos');
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="icon" type="imagenes/png" href="imagenes/descarga.png" />
   <title>Ingresar</title>
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="css/estilo.css" type="text/css">

  </head>
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
  <body>
<div>
  <IMG id="centro19" src="imagenes/descarga.png">
</div>
<div align="center">

<center>

  <div >

<table id="tabla">
<h1>registro de usuarios</h1>
   <td >id</td>
    <br>
    <td>codigo</td>
    <br>
    <td>nombre</td>
    <br>
    <td>placa</td>

  </center>
        <?php
         $sql=mysqli_query($conexion,"SELECT * FROM placa_vehiculo") or die ("error al traer los datos");
         $result=mysqli_query($conexion,$sql);

         while ($mostrar=mysqli_fetch_array($sql)) {

            echo '<tr>';
            echo '<td>' .$mostrar['id_placa_vehiculo'].'</td>';
            echo'<td>'  .$mostrar['codigo'].'</td>';
            echo '<td>' .$mostrar['nombre'].'</td>';
            echo '<td>' .$mostrar['nregistro'].'</td>';
            echo '</tr>';

         }
         mysqli_close($conexion);
         echo "</table>";
         ?>
       </table>

     </button>
   </div>
   <div id="centro10" class="list-group-item list-group-item-warning">
<p>© 2019 cotecnova  Dirección: Cl. 10 #3-95, Cartago, Valle del Cauca
Fundación: 21 de septiembre de 1971
Teléfono: (2) 2111804
Todos los derechos reservados.
Desarrollado por cristian camilo martinez</p>
   </div>
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
       <script type="text/javascript" src="js/jquery.min.js"></script>
     	<!-- Codigo JS Propio -->
     	<script type="text/javascript" src="js/codigo.js"></script>
  </body>
</html>
