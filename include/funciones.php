<?php

function mostrarCandidatos()
{
    require './include/Conexion.php';
    $result = mysqli_query($db, "SELECT * FROM partido");

    echo "<section class='Plantilla'>"; 
    echo "<h2>Plantilla de Candidatos</h2>";
    echo "<div class='candidatos'>";

    while ($row = mysqli_fetch_array($result)) {
        $siglas = $row['inicial'];
        $nombre_partido = $row['nombre'];
        $candidato = $row['candidato'];
        $imagen = $row['imagen'];
        echo "<div>";

        echo "<img src='./img/$imagen'>";
        echo "<h5>$candidato</h5>";
        echo "<p>$nombre_partido ($siglas) </p>";

        echo "</div>";
    }

    echo "</div>";
    echo "</section>";
}
