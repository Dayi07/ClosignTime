<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/agregar.css')}}">
</head>
<body>

<form action="" method="POST" class="form-box" enctype="multipart/form-data">

    <center><h2>Modificar Archivo</h2></center>
    
    Tipo de Archivo: <select name="TipoArchivo">
                        <option>Word</option>   <option>PDF</option>   <option>Excel</option>   <option>PowerPoint</option>   <option>JPG</option>
                    </select><br>
    Fecha y Hora de entrega: <input type="datetime-local" name="Fecha_hora"><br>

    Archivo: <input type="file" name="Archivo"><br>

    Estado: <select name="Estado">
                        <option>Pendiente</option>   <option>Terminado</option>   <option>Entregado</option>
                    </select><br>

   <center>
       <button type="submit" name="ModificarDoc"> Modificar </button>
       <button type="submit" name="Cancelar"> <a  href="{{route('documento')}}"> Cancelar </a></button>
    </center>


</form>
</body>
</html>

