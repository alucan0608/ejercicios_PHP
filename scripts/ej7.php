<?php

$total_compra = 34.5;

if ($total_compra < 30){
    echo "<b>Compra más o te cobraremos 8,95€ de gastos de envío</b>";
} elseif ($total_compra > 30 && $total_compra < 90) {
    $x = 90 - $total_compra; 
    echo "Con sólo $x € más podrás tener gastos de envío gratuitos";
} elseif ($total_compra >= 90) {
    echo "<b>Gastos de envío incluidos</b>";
}

?>