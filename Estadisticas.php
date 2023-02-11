<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preload" href="./css/normalize.css" as="style">
    <link rel="stylesheet" href="./css/normalize.css">

    <link rel="preload" href="./css/styles.css" as="style">
    <link rel="stylesheet" href="./css/styles.css">

    <title>Conteo de Votos</title>
</head>

<body>
    <header>
        <h1>Conteo de Votos Por Partido</h1>
        <hr>
    </header>

    <section class="Plantilla">
        <div class="candidatos">
            <?php
            require './include/Conexion.php';
            $result = mysqli_query($db, "SELECT * FROM partido");
            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $siglas = $row['inicial'];
                $imagen = $row['imagen'];
                $aux = mysqli_query($db, "SELECT * FROM voto WHERE partidoId=$id");
                echo "<div>";

                echo "<img src='./img/$imagen'>";
                echo "<p>$siglas</p>";
                echo"<p>$aux->num_rows</p>";
                echo "</div>";
            }
            ?>
        </div>
    </section>

    <div class="Mensaje">
        <a href="index.php">Regresar al Menú Principal</a>
    </div>

</body>
</html>