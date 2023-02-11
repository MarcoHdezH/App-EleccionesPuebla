<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos</title>
</head>
<body>
    <h1>Actualizar Datos de Votante // Dar de baja a Votante</h1>
    <hr>
    <h3>Recuerda tener tu clave a la mano</h3>

    <form action="./include/actualizarUsuario.php" method="post" enctype="multipart/form-data">
        <label>Nombre(s): <input type="text" name="nombre" required></label>
        <br><br>
        <label>Clave(CURP): <input type="text" name="curp" required></label>
        <br><br>
        <label>Edad: <input type="number" name="edad" required></label>
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
        <br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <h3>Es necesario tener tu clave para darte de baja</h3>

    <form action="./include/eliminarUsuario.php" method="post" enctype="multipart/form-data">
        <label>Clave(CURP): <input type="text" name="curp" required></label>
        <br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    
</body>
</html>