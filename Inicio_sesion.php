<?php  
#Conexion con la base de datos
include_once 'validar.php';
include_once 'database.php';    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    
    <form action="Inicio_sesion.php" method="POST" class="form-box">
        
        <img src="img/logo.jpg" class="logo">
        <input type="text" placeholder="Ingrese su correo" name="correo">
        <input type="password" placeholder="Ingrese su contraseña" name="contrasena">
        <a href="" type="text" name="ingresar"> Ingresar </a>
        <p>¿Olvidaste tu contraseña? <a href="Recuperar_contraseña.html">Recuperala aqui</a></p>

    </form>

</body>
</html>

<?php

if(isset($_POST['ingresar'])){
$user = new usuario();

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];



if (empty($correo) || empty($contrasena)) {
        echo "<script>window.location('login.php')</script>";
    echo "<script>alert('Usuario y/o contraseña vacíos')</script>";
}else{
    $user ->correoExists($correo, $contrasena);
}
}

?>

