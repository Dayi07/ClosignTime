<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
</head>
<body>
 
    <form action="{{route('registrarse')}}" class="form-box" method="POST">
        @csrf
        <img src="img/logo.jpg" class="logo">
        <input type="text" placeholder="Nombre" name="Nombre_usuario">
        <input type="text" placeholder="Edad" name="Edad_usuario">
        <input type="text" placeholder="Correo" name="Correo_usuario">
        <input type="password" placeholder="Contraseña" name="Contraseña_usuario">
        <button type="submit"> Registrarse </button>

    </form>

</body>
</html>

