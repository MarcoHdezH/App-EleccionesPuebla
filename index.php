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

    <title>Elecciones 2023</title>
</head>

<body>

    <header>
        <h1>Elecciones Presidente de la Republica 2024</h1>
        <hr>
    </header>

    <section class="Plantilla">
        <h2>Plantilla de Candidatos</h2>
        <form action="./include/registrarVoto.php" method="post">
            <div class="candidatos">
                <?php
                    require './include/Conexion.php';
                    $result = mysqli_query($db, "SELECT * FROM partido");
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $siglas = $row['inicial'];
                        $nombre_partido = $row['nombre'];
                        $candidato = $row['candidato'];
                        $imagen = $row['imagen'];
                        echo "<div>";
        
                        echo "<img src='./img/$imagen'>";
                        echo "<h5>$candidato</h5>";
                        echo "<p>$nombre_partido ($siglas) </p>";
                        echo "<input type='radio' name='partido' value='$id' required>";
        
                        echo "</div>";
                    }
                ?>
            </div>
            <label>Ingresa tu Clave: <input type="text" name="clave" required></label>
            <br><br>
            <input type="submit" name="enviar" value="Emitir Voto">
        </form>
    </section>
</body>

</html>