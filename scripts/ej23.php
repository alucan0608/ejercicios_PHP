<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Escribe las letras de un DNI: <input type="text" name="DNI"><br>
            <input type="submit" value="ENVIAR">
        </form>

        <?php
            function letraDNI($num_dni){
                $cadena = "TRWAGMYFPDXBNJZSQVHLCKEW";
                $posicion = $num_dni % 23;
                $letra = $cadena[$posicion];
                return $letra;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $num_dni = $_POST['DNI'];
                
                $letra_dni = letraDNI($num_dni);
                echo "El NIF completo es: " . $num_dni . $letra_dni;
            }
        ?>
    </body>
</html>