

    <?php
     $server = "localhost";
     $usuario= "root";
     $contraseña ="camilo1998";
     $db="parqueadero";
     $conexion=mysqli_connect('localhost','root','camilo1998','parqueadero') or die ('Error al conectar con la base de datos');

    $id_placa_vehiculo = $_POST['eliminar'];
    mysqli_query($conexion,"DELETE FROM placa_vehiculo WHERE  id_placa_vehiculo ='$id_placa_vehiculo'") or die ("error en la conexion");
    mysqli_close($conexion); echo "datos elimindados corretamente";
  ?>
