<?php
$host = "dpg-d4f0i4vpm1nc7394jf80-a.oregon-postgres.render.com";
$dbname = "smedi";
$user = "root";
$password = "cqwUi8RS9wvlLezX5p90Nz4BicAatD3e";

$conn = pg_connect("host=$host dbname=$dbname user=$user password=$password");
if(!$conn){
    die("Error de conexión a PostgreSQL: " . pg_last_error());
}
?>
