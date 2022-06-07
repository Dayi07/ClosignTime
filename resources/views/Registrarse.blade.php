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

    <form action="Registrarse.php" class="form-box" method="POST">

        <img src="img/logo.jpg" class="logo">
        <input type="text" placeholder="Nombre" name="Nombre">
        <input type="text" placeholder="Edad" name="Edad">
        <input type="text" placeholder="Correo" name="Correo">
        <input type="password" placeholder="Contraseña" name="Contrasena">
        <button type="submit"> Registrarse </button>

    </form>

</body>
</html>

