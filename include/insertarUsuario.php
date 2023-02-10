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
    $curp = $_REQUEST['curp'];
    $edad = $_REQUEST['edad'];
    $estado = $_REQUEST['estado'];

    require './Conexion.php';

    $aux = mysqli_query($db, "SELECT * FROM persona WHERE curp='$curp'");

    if ($aux->num_rows == 0) {
        mysqli_query($link, "INSERT INTO persona (nombre,curp,edad,estado) VALUES ('$nombre','$curp',$edad,'$estado')");
        echo "<div class='Mensaje'>";
        echo "<h1>¡Felicidades! Tu voto quedo Registrado</h1>";
        echo "<h4>Gracias por ejercer tu derecho a votar</h4>";
        echo '<a href="../index.php">Regresar a la Ventana Anterior</a>';
        echo "</div>";
    } else {
        echo "<div class='Mensaje'>
                <h2>¡Fallo al Momento de Registrar Usuario!</h2>
                <h4>Esa clave esta en uso. Por favor cambiala</h4>
                <a href='../Usuarios.php'>Regresar a la Ventana Anterior</a>
              </div>";
    }
    mysqli_close($db);
    ?>

</body>

</html>