<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
</head>
<body>

    <form action="{{route('inicio')}}" method="POST" class="form-box">

        <img src="{{asset('img/logo.jpg')}}" class="logo">
        <input type="text" placeholder="Ingrese su correo" name="Correo">
        <input type="password" placeholder="Ingrese su contraseña" name="Contrasena">
        <button type="submit" name="ingresar"> Ingresar </button>

        <p>¿No tienes cuenta? <a href="{{route('registro')}}">Registrate aquí</a></p>

        


    </form>

</body>
</html>


<?php

$res = (array('route'=>'Inicio.prueba', 'method'=>'POST'));
if ($res = true) {
    header("Location: {{route('perfil')}}");
}

?>
