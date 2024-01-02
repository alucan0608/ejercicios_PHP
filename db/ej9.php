<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio9</title>
    <style>
        table {margin-top:30px;}
        td {border:1px solid blue;}
    </style>
</head>
<body>
<h1> Ejercicio 9</h1>
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

$Artista1 = "Alberto Chicote";
$Artista2 = "Arcángel";
$dniArtista1 = "12354862";
$dniArtista2 = "48526359";

$queryVerificar = "SELECT dni FROM artista WHERE dni IN ('$dniArtista1', '$dniArtista2')";
$resultadoVerificar = mysqli_query($conn, $queryVerificar);

if (mysqli_num_rows($resultadoVerificar) > 0) {
    echo '<p>Error al insertar los artistas: DNI duplicado</p>';
} else {
    $queryInsertar = "INSERT INTO artista (dni, nombre) VALUES ('$dniArtista1', '$Artista1'), ('$dniArtista2', '$Artista2')";

    if (mysqli_query($conn, $queryInsertar)) {
        echo '<h1>Insertar Artistas</h1>';
        echo '<p>Artistas insertados correctamente:</p>';
        echo '<ul>';
        echo '<li>DNI: ' . $dniArtista1 . ', Nombre: ' . $Artista1 . '</li>';
        echo '<li>DNI: ' . $dniArtista2 . ', Nombre: ' . $Artista2 . '</li>';
        echo '</ul>';
    } else {
        echo '<p>Error al insertar los artistas: ' . mysqli_error($conn) . '</p>';
    }
}

mysqli_close($conn);
?>
</body>
</html>