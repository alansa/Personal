<?php
if (!function_exists('obtenerFecha')) {

    function obtenerFecha($fecha) {

        $meses [] = array("Invalido","Enero","Febrero","Marzo","Abril",
                         "Mayo", "Junio", "Julio", "Agosto",
                         "Septiembre", "Octubre", "Noviembre", "Diciembre");
        
#######################################        
//        $meses = array(
//            "01" => "Enero",
//            "02" => "Febrero",
//            "03" => "Merzo",
//            "04" => "Abril",
//            "05" => "Mayo",
//            "06" => "Junio",
//            "07" => "Julio",
//            "08" => "Agosto",
//            "09" => "Septiembre",
//            "10" => "Octubre",
//            "11" => "Noviembre",
//            "12" => "Diciembre"
//        );
#######################################
        list($anio, $mes, $dia) = explode("-", $fecha);
       
//**********************************************************
        while (next($meses) == TRUE) {
//            current($meses);
//            current() - Devuelve el elemento actual en un array
            if (strcmp(key($meses), $mes) == 0) {
                // key() devuelve el elemento índice de la posición actual del array. 
                $fechaFinal = $dia . " de " . $meses[$mes] . " del " . $anio;
//                
            }
            next($meses);
            //            var_dump(next($meses));
            //next() - Avanza el puntero interno de un array
        }
//***********************************************************
//        NO FUNCIONA
//        foreach ($meses as $month) {
//                     if (strcmp(key($meses), $mes) == 0) {
////              key() devuelve el elemento índice de la posición actual del array. 
//                $fechaFinal = $dia . " de " . $meses[$mes] . " del " . $anio;
//             }
////             else{
////                 $fechaFinal="El mes que ingresaste ".$mes." es invalido";
////             }
//             next($meses);
//        }
//*************************************************************
        $valor = (int)$mes;
        echo $valor;
    $fechaFinal= $dia." de ".$meses['0'][$valor]." del ".$anio;
        return $fechaFinal;
    }

    //2015-08-16
    //16 de Agosto del 2016
}

