<html>
    <head>
        <meta charset="UTF-8">
        <title>Info</title>
         <style>
            ul li{
                padding: 10px 20px;
                color:blueviolet;
                font-family: cursive;
                font-size: 20px;
                list-style: none;

            }
            #edo{
                color:blue;
                font-family: fantasy;
                font-size: 15px;
                text-align: center;            }
        </style>
    </head>
    <body>
        <?php
        echo "<ul>";
        foreach ($paises as $pais) {
            echo "<li><a href=" . base_url() . "paisesControlador/leerPais/"
            . $pais['id'] . ">" . $pais['pais'] . "</a></li>";
            foreach ($estados as $estado) {

                if (strcmp($pais['id'], $estado['paises_id']) == 0) {
                    echo " <blockquote>";
                    echo "<a id='edo'href=" . base_url() . "paisesControlador/leerEstado/"
                    . $pais['id'] . "/" . $estado['id'] . ">" . $estado['estado'] . "</a><br>";
                    echo " </blockquote>";
                
//                foreach ($informacion as $info) {
//
                    if (strcmp($informacion['id'], $estado['id']) == 0) {
//                        echo " <blockquote>";
//                        echo "<a>" . $info['descripcion'] . "</a><br>";
                        echo "<a>" . $informacion['descripcion'] . "</a><br>";
//                        echo " </blockquote>";
                    }
//                }
            }}
        }
        echo "</ul>";
        ?>
    </body>
</html>
