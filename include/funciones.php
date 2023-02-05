<?php

function mostrarCandidatos()
{
    require './include/Conexion.php';
    $result = mysqli_query($db, "SELECT * FROM partido");

    echo "<table border='1'>";
    echo "<tr>
        <td>ID</td>
        <td>Partido</td>
        <td>Nombre</td>
        <td>Candidato</td>
        <td>Imagen</td>
      </tr>";

    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $siglas = $row['inicial'];
        $nombre_partido = $row['nombre'];
        $candidato = $row['candidato'];
        $imagen = $row['imagen'];
        echo "<tr>";
        echo "<td>$id</td>
          <td>$siglas</td>
          <td>$nombre_partido</td>
          <td>$candidato</td>
          <td><img width='70' heigth='70' src='misImagenes/$imagen'></td>";
        echo "</tr>";
    }
    echo "</table>";
}
