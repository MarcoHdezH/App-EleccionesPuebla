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

    <title>Nuevos Usuarios</title>
</head>

<body>

    <header>
        <h1>Registro de Nuevos Votantes</h1>
        <hr>
    </header>

    <?php
    $nombre = $_REQUEST['nombre'];
    $edad = $_REQUEST['edad'];
    $estado = $_REQUEST['estado'];

    require './Conexion.php';

    mysqli_query($db, "INSERT INTO persona (nombre,edad,estado) VALUES ('$nombre',$edad,'$estado')");
    echo "<div class='Mensaje'>";
    echo "<h1>¡Operacion Exitosa!</h1>";
    echo "<h4>Estas dado de alta en el sistema</h4>";
    echo '<a href="../index.php">Regresar a la Ventana Principal</a>';
    echo "</div>";
    mysqli_close($db);
    ?>

</body>

</html>