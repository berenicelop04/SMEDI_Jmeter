<!DOCTYPE html>
<html>
<head>
    <title>Agregar Localidad</title>
</head>
<body>
<h2>Agregar Localidad</h2>
<form action="guardar.php" method="post">
    <label>Localidad:</label>
    <input type="text" name="localidad" required><br><br>
    <label>ID Municipio:</label>
    <input type="number" name="id_municipio" required><br><br>
    <input type="submit" value="Guardar">
</form>
<p><a href="index.php">Volver</a></p>
</body>
</html>
