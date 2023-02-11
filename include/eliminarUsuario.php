<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preload" href="../css/normalize.css" as="style">
    <link rel="stylesheet" href="../css/normalize.css">

    <link rel="preload" href="../css/styles.css" as="style">
    <link rel="stylesheet" href="../css/styles.css">

    <title>Eliminar Usuarios</title>
</head>

<body>

    <?php
    require './Conexion.php';

    $nombre = $_REQUEST['nombre'];

    $aux = mysqli_query($db, "SELECT * FROM persona WHERE nombre='$nombre'");
    if ($aux->num_rows != 0) {
        $result = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM persona WHERE nombre='$nombre'"));
        $id = $result['id'];
        mysqli_query($db, "DELETE FROM voto WHERE votanteId=$id");
    }

    mysqli_query($db, "DELETE FROM persona WHERE nombre='$nombre'");
    echo "<div class='Mensaje'>
            <h1>¡Operacion Exitosa!</h1>
            <h4>El usuario $nombre ha sido dado de baja</h4>
            <a href='../index.php'>Regresar al Menú Principal</a>
          </div>";
    mysqli_close($db);
    ?>
</body>

</html>