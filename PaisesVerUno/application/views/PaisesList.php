<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <ul>
            <?php
            foreach ($paises as $pais) {

                echo '<li> <a href= "' . $base_url . 'index.php/paises/read_pais/' . $pais['id'] . '" >' . $pais['pais'] . '</a></li>';
                echo "<blockquote>";

                if (!empty($estados)) {
                    foreach ($estados as $estado) {

                        if (strcmp($pais['id'], $estado['paises_id']) == 0) {
                            echo '<a href= "' . $base_url . 'index.php/paises/read_info/'.$pais['id'].'/'.$estado['id'].'" >' . $estado['estado'] . '</br></a>';
                        }
                    }
                }
                echo "</blockquote>";
                
                echo $fecha;
                foreach ($fechaActual as $partesFecha) {
                    echo "<br>".$partesFecha ."<br>";
                }
                
            }
            ?>


        </ul>
    </body>
</html>
