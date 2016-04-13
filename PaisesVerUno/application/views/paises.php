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
        <select name="pais">
            <?php
            for ($i = 0; $i < count($valor); $i++) {
                for ($j = 0; $j < 1; $j++) {
                    echo '<option  onclick=javascript:alert("' . $valor[$i][1] . '")>' .
                    $valor[$i][1] . '</option>';
                }
            }
            ?>
            
        </select>


    </body>
</html>
