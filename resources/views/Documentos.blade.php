<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos</title>
    <link rel="stylesheet" href="{{asset('css/documento.css')}}" type="text/css">

    

</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <h1>Closing Time</h1>
        </div>

        <div class="boton">
            <label for="btn-menu">Menú</label>
        </div>

        <input type="checkbox" id="btn-menu">

        <nav class="menu" >
            <a href="{{route('perfil')}}">Perfil</a>
            <a href="{{route('documento')}}">Documentos</a>
            <a href="">Tiempo</a>
        </nav>
    </div>
</header>

<form action="" method="POST" class="form-box">

    <center><button type="submit" name="AgregarDoc"><a  href="{{route('agregar')}}"> Nuevo Documento </a></button></center>

    <div id="Campo">


        <div id="contenido">
            <h1>
                <p>documento.docx</p>
            </h1>
            <p>Fecha Entrega: 9/06/2022<?php #echo $fila['Fecha_Hora_entrega']; ?></p>
            <p>Tipo: Word<?php #echo $fila['Tipo_documento']; ?></p>
        </div>

        <div id="botones">
            <button type="button" class="modificar"><a  href="{{route('modificar')}}"> Modificar </a></button><br><br><br>
            <button type="button" class="eliminar"><a  href=""> Eliminar </a></button>
        </div>

        <center>
            <div id="estado">
                <p><b>Terminado<?php #echo $fila['Estado_documento']; ?></b></p>
            </div>
        </center>


    </div>
    <br><br>

</form>


</body>
</html>

