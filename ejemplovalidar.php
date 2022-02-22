<?php 

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['correo']=$correo;

include_once('database.php');


#hacemos la consulta de validacion
$consulta="SELECT * FROM usuario WHERE Correo_usuario='$correo' AND Contraseña_usuario='$contraseña'";
#validamos la consulta
$resultado=mysqli_query($con, $consulta);

#almacena los resultados 
$filas=mysqli_num_rows($resultado);

if ($filas) {
    header("location: http://localhost/PROYECTO/bienvenido.html");
} else {
    ?><?php
    include("Inicio_sesion.php"); ?>
    <h1 class="bad">Correo o contraseña incorrectos</h1>
    <?php
}

#para "botar" el resultado
mysqli_free_result($resultado);

#terminar la conexion
mysqli_close($conexion);

?>