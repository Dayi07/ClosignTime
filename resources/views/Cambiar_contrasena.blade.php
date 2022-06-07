<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar contraseña</title>
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
</head>
<body>

    <form action="Cambiar_contrasena.php" class="form-box" method="POST">

        <img src="img/logo.jpg" class="logo">
        <h3>Cambiar contraseña</h3>
        <input type="text" placeholder="Correo" name="Correo">
        <input type="password" placeholder="Contraseña nueva" name="ContraNueva">
        <input type="password" placeholder="Confirmar contraseña" name="ConfNueva">
        <button type="submit"> Cambiar </button>
        <button type="submit"><a href="perfil.php"> Cancelar </a></button>


    </form>

</body>
</html>

