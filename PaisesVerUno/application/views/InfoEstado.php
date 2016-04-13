<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Informacion de estados</title>
    </head>
    <body>
        <?php
        foreach ($info as $informacion){
            
            echo "</br>" . $informacion['descripcion'];
        }
        ?>
    </body>
</html>
