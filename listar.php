<?php
include "conexion.php";

$query = "SELECT * FROM localidades ORDER BY id";
$resultado = pg_query($conn, $query);

echo "<h2>Listado de Localidades</h2>";
echo "<table border='1' cellpadding='5'>
<tr>
<th>ID</th>
<th>Localidad</th>
<th>ID Municipio</th>
<th>Creado</th>
<th>Actualizado</th>
</tr>";

if(pg_num_rows($resultado) > 0) {
    while($fila = pg_fetch_assoc($resultado)) {
        echo "<tr>
        <td>{$fila['id']}</td>
        <td>{$fila['localidad']}</td>
        <td>{$fila['id_municipio']}</td>
        <td>{$fila['created_at']}</td>
        <td>{$fila['updated_at']}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No hay localidades registradas.</td></tr>";
}

echo "</table>";
echo "<p><a href='index.php'>Volver</a></p>";
?>
