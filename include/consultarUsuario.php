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

    <title>Consulta de Clave</title>
</head>

<body>
    <?php
    require './Conexion.php';

    $nombre = $_REQUEST['nombre'];

    $result = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM persona WHERE nombre='$nombre'"));
    $edad = $result['edad'];
    $estado = $result['estado'];

    echo "<div class='Mensaje'>
            <h1>Estos son tus datos:</h1>
            <h5>Nombre(s): $nombre</h5>
            <h5>Edad: $edad</h5>
            <h5>Estado de Procedencia: $estado</h5>
            <br><br><br>
            <a href='../index.php'>Regresar al Menú Principal</a>
          </div>";
    mysqli_close($db);
    ?>

</body>

</html>