<?php
    session_start();
    $Correo = $_SESSION['CorreoUsu'];
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
    
    <div action="" class="form-box" method="POST">
        
        <img src="{{asset('img/logo.jpg')}}" class="logo">
        <input type="text" placeholder="Ingrese su correo" name="Correo">        
        <a href="" type="text"> Recuperar </a>

    </div>

</body>
</html>
