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
        <h1>Elecciones Puebla 2023</h1>
        <hr>
    </header>

    <?php

    require './include/funciones.php';

    mostrarCandidatos();
    
    ?>

</body>

</html>