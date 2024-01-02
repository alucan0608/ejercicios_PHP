<?php
$fecha = date('d - m - Y');

$dia_ing = strftime('%A');
$dia_esp = [
    'Monday'    => 'lunes',
    'Tuesday'   => 'martes',
    'Wednesday' => 'miércoles',
    'Thursday'  => 'jueves',
    'Friday'    => 'viernes',
    'Saturday'  => 'sábado',
    'Sunday'    => 'domingo',
];

$nombre_dia = $dia_esp[$dia_ing];

echo "<b>Fecha actual:</b> $nombre_dia $fecha";

?>