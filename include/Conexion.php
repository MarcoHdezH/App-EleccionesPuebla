<?php

$db = mysqli_connect('localhost', 'root', 'root', 'elecciones');
if (!$db) {
    echo "Error en la conexion";
    exit;
}
echo "Conexion Exitosa";
?>
