<?php

$dia_ingles = date('D');

if ($dia_ingles == 'Mon') {
    $dia_esp = 'Lunes';
} elseif ($dia_ingles == 'Tue') {
    $dia_esp = 'Martes';
} elseif ($dia_ingles == 'Wed') {
    $dia_esp = 'Miércoles';
} elseif ($dia_ingles == 'Thu') {
    $dia_esp = 'Jueves';
} elseif ($dia_ingles == 'Fri') {
    $dia_esp = 'Viernes';
} elseif ($dia_ingles == 'Sat') {
    $dia_esp = 'Sábado';
} elseif ($dia_ingles == 'Sun') {
    $dia_esp = 'Domingo';
}

echo "$dia_esp";
?>