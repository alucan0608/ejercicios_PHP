<?php
    echo "<table border='1'>";

    $cuenta = 1;
    $num_filas = 10;
    $num_columnas = 10;

    for ($fila = 1; $fila <= $num_filas; $fila++) {
        
        if ($fila % 2 != 0 ) {
            echo "<tr style = 'background-color: gray;'>";
        }
        else {
            echo "<tr>";
        }

        for ($columna = 1; $columna <= $num_columnas; $columna++) {
            echo "<td> $cuenta </td>";
            $cuenta += 1;
        }
        echo "</tr>";
    }
    echo "</table>";
?>