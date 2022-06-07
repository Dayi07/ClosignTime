<?php
/*include ("Database.php");
$usuarios= new Database();

session_start();
$Correo = $_SESSION['CorreoUsu'];

$res = $usuarios->datosUsuario($Correo);
$fila = mysqli_fetch_array($res);*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="{{asset('css/Perfil.css')}}" type="text/css">

</head>
<body>

<header class="header">
    <div class="container">

        <div class="logo">
            <h1>Closing Time</h1>
        </div>

        <div class="boton">
            <label for="btn-menu">Menu</label>
        </div>

        <input type="checkbox" id="btn-menu">

        <nav class="menu" >
            <a href="Perfil.php">Perfil</a>
            <a href="Documentos.php">Documentos</a>
            <a href="">Tiempo</a>
        </nav>
</header>

<form action="" method="POST" class="form-box">

    <img src="img/logo.jpg" class="foto">

    <h1>
        <?php
            #echo $fila['Nombre_usuario'];
        ?>
    </h1>

    <h3>
        <?php
            #echo $fila['Edad_usuario'];
        ?>

    </h3>

    <div class="btn-perfil">
        <button type="submit" name="CerrarSes" id="boton_perfil"><a href="login.php" onclick ="<?php #session_destroy(); ?>">  Cerrar Sesion </a></button>
        <button type="submit" name="CambiarCont" id="boton_perfil"><a  href="Cambiar_contrasena.php"> Cambia Contraseña </a></button>
    </div>
</form>


</body>
</html>

