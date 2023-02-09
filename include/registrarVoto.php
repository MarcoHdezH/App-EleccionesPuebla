<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require './Conexion.php';
    $partidoId = $_REQUEST['partido'];
    $curp = $_REQUEST['clave'];

    echo "<p>IdPartido: $partidoId</p><br>";
    echo "<p>Clave de Usuario: $curp</p><br>";

    $aux = mysqli_query($db, "SELECT * FROM persona WHERE curp='$curp'");

    if ($aux->num_rows == 0) {
        echo "Usuario no encontrado, Verifica tu Clave";
    } else {
        $result = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM persona WHERE curp='$curp'"));
        $id=$result['id'];
        $lugar=$result['estado'];
        mysqli_query($db, "INSERT INTO voto (partidoId,votanteId,fecha,lugar) VALUES ($partidoId,$id,CURDATE(),'$lugar')");

    }

    ?>
</body>

</html>