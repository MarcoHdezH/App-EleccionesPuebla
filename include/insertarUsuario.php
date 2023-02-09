<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Registro de Nuevos Votantes</h1>
    <hr>

    <?php

    $nombre = $_REQUEST['nombre'];
    $curp = $_REQUEST['curp'];
    $edad = $_REQUEST['edad'];
    $estado = $_REQUEST['estado'];

    echo "$nombre<br>";
    echo "$curp<br>";
    echo "$edad<br>";
    echo "$estado<br>";

    $link = mysqli_connect('localhost', 'root', 'root', '');

    mysqli_select_db($link, 'elecciones');
    $aux=mysqli_query($link,"SELECT * FROM persona WHERE curp='$curp'");

    if($aux->num_rows==0){
         mysqli_query($link, "INSERT INTO persona (nombre,curp,edad,estado) VALUES ('$nombre','$curp',$edad,'$estado')");
    }else{
         echo "No";
    }
    mysqli_close($link);



    ?>

</body>

</html>