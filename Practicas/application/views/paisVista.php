<html>
    <head>
        <meta charset="UTF-8">
        <title>Paises</title>
        <style>
            ul li{
                padding: 10px 20px;
                color:blueviolet;
                font-family: cursive;
                font-size: 20px;
                list-style: none;

            }
        </style>
    </head>
    <body>
        <?php
        echo "<ul>";
        foreach ($paises as $pais) {
            echo $fecha;
            
            echo "<li><a href=" . base_url() . "paisesControlador/leerPais/"
            . $pais['id'] . ">" . $pais['pais'] .
            "</a></li>";
            if (!empty($estados)) {
                foreach ($estados as $estado) {

                    if (strcmp($pais['id'], $estado['paises_id']) == 0) {

                        echo " <blockquote>";

                        echo "<a id='edo'href=" . base_url() . "paisesControlador/leerEstado/"
                        . $pais['id'] . "/" . $estado['id'] . "><br>" .
                        $estado['estado'] .
                        "</a><br>";

                        echo " </blockquote>";
                    }
                    if (!empty($informacion)) {
//                foreach ($informacion as $info) {
                        if (strcmp($pais['id'], $estado['paises_id']) == 0) {
                            if (strcmp($informacion['id'], $estado['id']) == 0) {
                                echo " <blockquote>";

                                echo "<a>" . $informacion['descripcion'] . "</a><br>";
                                echo "<br><img src=" . "'" . base_url() . "../img/" . $informacion['imagen'] . "'" . "width='50%" . "><br>";
                                echo "<br>";
                                echo " </blockquote>";
                            }
                        }
//                    }
                    }
                }
            }
        }
        echo "</ul>";
        ?>

    </body>
</html>
