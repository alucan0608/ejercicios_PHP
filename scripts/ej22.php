<?php
    ini_set('display_errors', 1);

    ini_set('display_startup_errors', 1);
    
    error_reporting(E_ALL); 

    function crearTabla($fila,$columna) {
        $cont = 1;
        $result = "";
        $result.= "<table border=1>";
        for ($i = 1; $i <= $fila; $i++){
            $result .= "<tr>";
                for ($j = 1; $j <= $columna; $j++){
                    $result .= "<td>";
                        $result .= $cont;
                    $result .= "</td>";
                    $cont++;
                }
            $result .= "</tr>";
        }
        $result.= "</table>";
        return $result;
    }

    $tab1 = crearTabla(2,3);
    $tab2 = crearTabla(3,4);
    $tab3 = crearTabla(5,6);

    echo "$tab1 <br> $tab2 <br> $tab3"
?>