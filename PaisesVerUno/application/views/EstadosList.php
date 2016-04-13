<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>jum</title>
    </head>
    <body>
        
        <?php
        foreach ($estados as $estado) {
            echo '<li>' . $estado['estado'] . '</li>';
        }
        ?>


    </body>
</html>
