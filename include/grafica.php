<?php

    require './Conexion.php';
    $votosPRI = mysqli_query($db, "SELECT * FROM voto WHERE partidoId=1");
    $votosPAN = mysqli_query($db, "SELECT * FROM voto WHERE partidoId=2");
    $votosPRD = mysqli_query($db, "SELECT * FROM voto WHERE partidoId=3");
    $votosMorena = mysqli_query($db, "SELECT * FROM voto WHERE partidoId=4");
    $votosVerde = mysqli_query($db, "SELECT * FROM voto WHERE partidoId=5");
    $votosNulos = mysqli_query($db, "SELECT * FROM voto WHERE partidoId=6");

    $etiquetas = ["PRI", "PAN", "PRD", "MORENA","VERDE","NULOS"];
    $datosVentas = [$votosPRI->num_rows, $votosPAN->num_rows, $votosPRD->num_rows, $votosMorena->num_rows,$votosVerde->num_rows,$votosNulos->num_rows];
    $respuesta = [
        "etiquetas" => $etiquetas,
        "datos" => $datosVentas,
    ];
    echo json_encode($respuesta);
?>
