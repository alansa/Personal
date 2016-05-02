<table border="0">

    <?php
     echo '<tr class="success">';
    echo '<td class="success">';
    foreach ($paises as $pais) {


        
        echo '<a href= "' . base_url() . 'index.php/Paises/readCountry/' . $pais['id'] . '" >' . $pais['pais'] . '  </a>';  
        
          echo '<a href= "' . base_url() . 'index.php/Paises/EditCountry/' . $pais['id'] . '" class="btn glyphicon glyphicon-pencil"></a>';
          
           echo '<a href= "' . base_url() . 'index.php/Paises/DeleteCountry/' . $pais['id'] . '" class="btn glyphicon glyphicon-trash"></a>';
        




        echo "<blockquote>";

        if (!empty($estados)) {
            foreach ($estados as $estado) {

                if (strcmp($pais['id'], $estado['paises_id']) == 0) {
                    echo '<a href= "' . base_url() . 'index.php/paises/readCountry/' . $pais['id'] . '/' . $estado['id'] . '" " class="btn glyphicon glyphicon-pencil">' . $estado['estado'] . '</br></a>';

                }
            }
            
            
        }
        echo "</blockquote>";

//                echo $fecha;
    }


    echo "</td>";
   
    ?>




