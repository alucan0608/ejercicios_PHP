<?php
echo "<table border='1'>";
for ($base = 1; $base <= 4; $base++) {
    echo "<tr>";
    echo "<td>$base</td>";
    for ($exponente = 1; $exponente <= 4; $exponente++) {
        $resultado = pow($base, $exponente);
        echo "<td>$resultado</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
