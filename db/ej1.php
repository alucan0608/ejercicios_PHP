<!DOCTYPE html>
<html>
<head>

    <title>Ejercicio1</title>

</head>
</body>
<h1>Ejercicio 1</h1>
<p>El resultado de la consulta es:</p>

<?php
    $server='mysql';
    $bd='musica';
    $usu='admin01';
    $pass='hola01';
    $port='3306';
    $conn=mysqli_connect($server,$usu,$pass,$bd,$port);

    if (mysqli_connect_error()){

        echo 'error de conexion';
        exit();
        
    }

    $datos=array();
    $sql="SELECT titulo FROM cancion WHERE duracion > 5";
    if ($resultado = mysqli_query($conn, $sql)) {
        
        while ($row = mysqli_fetch_assoc($resultado)) {

            $datos[]=$row;

        }
        mysqli_free_result($resultado);
    }
        echo '<table celpadding="0" cellspacing="0">';
        echo '<tr><td><strong>TÍTULO</strong></td></tr>';
   
        foreach($datos as $registro){

        echo '<tr><td>' . $registro["titulo"] . '</td></tr>';

    }
    echo '</table>';
    mysqli_close($conn);
?>
</body>
</html>