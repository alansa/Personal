<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Paises</title>
    </head>
    <body>
        <?php
        $i = 0;
        foreach ($paises as $nombres) {
            echo "<a href='" . base_url() . "Paises/leer_pais/"
            . $paises[$i]["id"] . "'><br>"
            . $paises[$i]["nombre"] . " </a>";

//            echo "<br>".$paises[$i]["id"];
            $i++;
        }
        ?>
        <?php
        echo "<a href='" . base_url() . "Paises/obtenerFecha/"
        . $fecha . "'><br>" . " </a>";
        ?>
    </body>
</html>
