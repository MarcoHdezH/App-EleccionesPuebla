<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preload" href="./css/normalize.css" as="style">
    <link rel="stylesheet" href="./css/normalize.css">

    <link rel="preload" href="./css/styles.css" as="style">
    <link rel="stylesheet" href="./css/styles.css">

    <title>Consultar Usuario</title>
</head>

<body>
    <header>
        <h1>Consultar Informacion de Usuario y/o Votos</h1>
        <hr>
    </header>

    <div class="Mensaje">
        <h4>Favor de Seleccionar tu Nombre</h4>
    </div>

    <form class="Mensaje" action="./include/consultarUsuario.php" method="post">
        <select name="nombre">
            <?php
            require './include/Conexion.php';
            $result = mysqli_query($db, "SELECT * FROM persona");
            while ($row = mysqli_fetch_array($result)) {
                $nombre = $row['nombre'];
                echo "<option>$nombre</option>";
            }
            ?>
        </select>
        <br><br><br>
        <input type="submit" name="Consultar" value="Consultar">
        <br><br><br>
        <a href="index.php">Regresar a la Página Principal</a>
    </form>

</body>

</html>