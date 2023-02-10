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

    <title>Registrar Voto</title>
</head>

<body>

    <header>
        <h1>Registro de Voto Elecciones 2024</h1>
        <hr>
    </header>
    <?php
    require './Conexion.php';
    $partidoId = $_REQUEST['partido'];
    $curp = $_REQUEST['clave'];

    $aux = mysqli_query($db, "SELECT * FROM persona WHERE curp='$curp'");

    if ($aux->num_rows == 0) {
        echo "<div class='Mensaje'>";
        echo "<h2>Fallo a la hora de Registrar tu Voto</h2>";
        echo "<h4>Favor de Verificar tu Clave por Favor</h4>";
        echo '<a href="../index.php">Regresar a la Ventana Anterior</a>';
        echo "</div>";
    } else {
        $result = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM persona WHERE curp='$curp'"));
        $id=$result['id'];
        $lugar=$result['estado'];
        mysqli_query($db, "INSERT INTO voto (partidoId,votanteId,fecha,lugar) VALUES ($partidoId,$id,CURDATE(),'$lugar')");
        echo "<div class='Mensaje'>";
        echo "<h1>¡Felicidades! Tu voto quedo Registrado</h1>";
        echo "<h4>Gracias por ejercer tu derecho a votar</h4>";
        echo '<a href="../index.php">Regresar a la Ventana Anterior</a>';
        echo "</div>";
    }
    ?>
</body>

</html>