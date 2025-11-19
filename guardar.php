<?php
include "conexion.php";

if(isset($_POST["localidad"]) && isset($_POST["id_municipio"])) {
    $localidad = $_POST["localidad"];
    $idMunicipio = $_POST["id_municipio"];

    $query = "INSERT INTO localidades (localidad, id_municipio, created_at, updated_at)
              VALUES ($1, $2, NOW(), NOW())";

    $resultado = pg_query_params($conn, $query, array($localidad, $idMunicipio));

    if($resultado){
        echo "Localidad agregada correctamente.<br>";
    } else {
        echo "Error: " . pg_last_error($conn);
    }

    echo "<p><a href='index.php'>Volver</a></p>";
} else {
    echo "Datos incompletos.";
}
?>
