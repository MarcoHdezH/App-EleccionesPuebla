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

    <title>Alta Usuarios</title>
</head>

<body>

    <header>
        <h1>Dar De Alta / Baja en el Sistema</h1>
        <hr>
    </header>

    <div class="Mensaje">
        <h4>No olvides guardar tu clave para futuras referencias</h4>
    </div>

    <form class="Mensaje" action="./include/insertarUsuario.php" method="post" enctype="multipart/form-data">
        <label>Nombre(s):</label>
        <br><br>
        <input type="text" name="nombre" required>
        <br><br>

        <label>Edad:</label>
        <br><br>
        <input type="number" name="edad" required>
        <br><br>
        <label>Selecciona tu Estado de Procedencia:</label>
        <br><br>
        <select name="estado">
            <option>AguasCalientes</option>
            <option>Baja California</option>
            <option>Baja California Sur</option>
            <option>Campeche</option>
            <option>CDMX</option>
            <option>Chiapas</option>
            <option>Chihuahua</option>
            <option>Coahuila</option>
            <option>Colima</option>
            <option>Durango</option>
            <option>Guanajuato</option>
            <option>Guerrero</option>
            <option>Hidalgo</option>
            <option>Jalisco</option>
            <option>Mexico(Estado)</option>
            <option>Michoacan</option>
            <option>Morelos</option>
            <option>Nayarit</option>
            <option>Nuevo Leon</option>
            <option>Oaxaca</option>
            <option>Puebla</option>
            <option>Queretaro</option>
            <option>Quintana Roo</option>
            <option>San Luis Potosi</option>
            <option>Sinaloa</option>
            <option>Sonora</option>
            <option>Tabasco</option>
            <option>Tamaulipas</option>
            <option>Tlaxcala</option>
            <option>Veracruz</option>
            <option>Yucatan</option>
            <option>Zacatecas</option>
        </select>
        <br><br><br>
        <input type="submit" name="agregar" value="Agregar">
    </form>

    <div class="Mensaje">
        <h4>En caso de querer darte de baja. Solo Selecciona tu nombre</h4>
        <h6>Esto borrara tu(s) voto(s) igualmente</h6>
    </div>

    <form class="Mensaje" action="./include/eliminarUsuario.php" method="post">
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
        <br><br>
        <input type="submit" name="borrar" value="Borrar">
        <br><br>
        <a href='../index.php'>Regresar a la venatana Anterior</a>
    </form>

</body>

</html>