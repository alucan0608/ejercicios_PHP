<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio10</title>
    <style>
        table {margin-top:30px;}
        td {border:1px solid blue;}
    </style>
</head>
<body>
<h1> Ejercicio 10</h1>
<p>El resultado de la consulta es:</p>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$server = 'mysql';
$bd = 'musica';
$usu = 'admin01';
$pass = 'hola01';
$port = '3306';
$conn = mysqli_connect($server, $usu, $pass, $bd, $port);

if (mysqli_connect_error()) {
    echo 'Error de conexiÃ³n';
    exit();
}
$dniArtista1 = "12354862";
$dniArtista2 = "48526359";

$queryVerificar = "SELECT dni FROM artista WHERE dni IN ('$dniArtista1', '$dniArtista2')";
$resultadoVerificar = mysqli_query($conn, $queryVerificar);

if (mysqli_num_rows($resultadoVerificar) === 0) {
    echo '<p>Error al eliminar los artistas: DNI no encontrado</p>';
} else {
    $queryEliminar = "DELETE FROM artista WHERE dni IN ('$dniArtista1', '$dniArtista2')";

    if (mysqli_query($conn, $queryEliminar)) {
        echo '<h1>Eliminar Artistas</h1>';
        echo '<p>Artistas eliminados correctamente:</p>';
        echo '<ul>';
        echo '<li>DNI: ' . $dniArtista1 . '</li>';
        echo '<li>DNI: ' . $dniArtista2 . '</li>';
        echo '</ul>';
    } else {
        echo '<p>Error al eliminar los artistas: ' . mysqli_error($conn) . '</p>';
    }
}

mysqli_close($conn);

?>

</body>
</html>