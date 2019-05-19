<?php
//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_POST['txtlogin']) and isset($_POST['txtpass'])){
    $usuario=mysqli_real_escape_string($conexion,$_POST['txtlogin']);
    $contraseña=password_hash($_POST['txtpass'],PASSWORD_DEFAULT);
    $ingresar=mysqli_query($conexion,'insert into nombre_tabla(columna_usuario,columna_password) values
    ("'.$usuario.'","'.$contraseña.'")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
    //redirección
    header ('location: ./');
}//si no se enviaron datos
else{
    header ('location: ./');
}

?>
