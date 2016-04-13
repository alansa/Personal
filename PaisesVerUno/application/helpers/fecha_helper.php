<?php

if (!defined("BASEPATH"))
    EXIT("NO ESTA PERMITIDO EL ACCESO");

if (!function_exists('obtenerFecha')) {

    function obtenerFecha($fecha) {

        $meses = array(
            "01" => "Enero",
            "02" => "Febrero",
            "03" => "Marzo",
            "04" => "Abril",
            "05" => "Mayo",
            "06" => "Junio",
            "07" => "Julio",
            "08" => "Agosto",
            "09" => "Septiembre",
            "10" => "Octubre",
            "11" => "Noviembre",
            "12" => "Diciembre"
        );
        list($anio, $mes, $dia) = explode("-", $fecha);
//**********************************************************
        $mesNumero = (int) $mes;
        $diaNumero = (int) $dia;
        $anioNumero = (int) $anio;
        $anioLong = strlen($anio);

//1996-01-01

        if (($mesNumero > 0 && $mesNumero < 13) &&
                ($diaNumero > 0 && $diaNumero < 32) &&
                ($anioLong == 4)) {

            switch ($mesNumero) {
                case 2:
                    if ($anioNumero <= 2016) {

                        $anioNumero = 2016 - $anioNumero;

                        if (($anioNumero % 4) == 0) {//Año bisiesto
                            if ($diaNumero <= 29) {
                                while (next($meses)) { //Next regresa un booleano
                                    if (strcmp(key($meses), $mes) == 0) {
                                        // key() devuelve el elemento índice de la posición actual del array. //regresa un String
                                        $fechaFinal = $dia . " de " . $meses[$mes] . " del " . $anio;
                                    } //fin if(strcmp)
                                }//fin while
                            } else {
                                $fechaFinal = "El mes solo tiene 29 dias";
                            }
                        } else {//Año no bisiesto
                            if ($diaNumero <= 28) {
                                while (next($meses)) { //Next regresa un booleano
                                    if (strcmp(key($meses), $mes) == 0) {
                                        // key() devuelve el elemento índice de la posición actual del array. //regresa un String
                                        $fechaFinal = $dia . " de " . $meses[$mes] . " del " . $anio;
                                    } //fin if(strcmp)
                                }//fin while
                            } else {
                                $fechaFinal = "El mes tiene solo 28 dias";
                            }
                        }
                    } else {
                        $anioNumero = $anioNumero - 2016;

                        if (($anioNumero % 4) == 0) {//Año bisiesto
                            if ($diaNumero <= 29) {
                                while (next($meses)) { //Next regresa un booleano
                                    if (strcmp(key($meses), $mes) == 0) {
                                        // key() devuelve el elemento índice de la posición actual del array. //regresa un String
                                        $fechaFinal = $dia . " de " . $meses[$mes] . " del " . $anio;
                                    } //fin if(strcmp)
                                }//fin while
                            } else {
                                $fechaFinal = "El mes solo tiene 29 dias";
                            }
                        } else {//Año no bisiesto
                            if ($diaNumero <= 28) {
                                while (next($meses)) { //Next regresa un booleano
                                    if (strcmp(key($meses), $mes) == 0) {
                                        // key() devuelve el elemento índice de la posición actual del array. //regresa un String
                                        $fechaFinal = $dia . " de " . $meses[$mes] . " del " . $anio;
                                    } //fin if(strcmp)
                                }//fin while
                            } else {
                                $fechaFinal = "El mes tiene solo 28 dias";
                            }
                        }
                    }
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    if ($dia < 31) {
                        while (next($meses)) { //Next regresa un booleano
                            if (strcmp(key($meses), $mes) == 0) {
                                // key() devuelve el elemento índice de la posición actual del array. //regresa un String
                                $fechaFinal = $dia . " de " . $meses[$mes] . " del " . $anio;
                            } //fin if(strcmp)
                        }//fin while
                    } else {
                        $fechaFinal = "El mes solo tiene 30 dias";
                    }
                    break;
                default:
                    $bandera = true;
                    while ($bandera) { //Next regresa un booleano
                        if (strcmp(key($meses), $mes) == 0) {
                            // key() devuelve el elemento índice de la posición actual del array. //regresa un String
                            $fechaFinal = $dia . " de " . $meses[$mes] . " del " . $anio;
                        } //fin if(strcmp)
                        $bandera = next($meses);
                        //next() - Avanza el puntero interno de un array
                    }//fin while
                    break;
            }
        } else {
            $fechaFinal = "Ingresaste una fecha incorrecta.";
        }//fin del if (mes >0 && 13<)

        return $fechaFinal;
        //2015-08-16
        //16 de Agosto del 2016
    }

    function validarAnio($fecha) {
        if ($anioNumero <= 2016) {

            $anioNumero = 2016 - $anioNumero;

            if (($anioNumero % 4) == 0) {//Año bisiesto
                if ($diaNumero <= 29) {
                    while (next($meses)) { //Next regresa un booleano
                        if (strcmp(key($meses), $mes) == 0) {
                            // key() devuelve el elemento índice de la posición actual del array. //regresa un String
                            $fechaFinal = $dia . " de " . $meses[$mes] . " del " . $anio;
                        } //fin if(strcmp)
                    }//fin while
                } else {
                    $fechaFinal = "El mes solo tiene 29 dias";
                }
            } else {//Año no bisiesto
                if ($diaNumero <= 28) {
                    while (next($meses)) { //Next regresa un booleano
                        if (strcmp(key($meses), $mes) == 0) {
                            // key() devuelve el elemento índice de la posición actual del array. //regresa un String
                            $fechaFinal = $dia . " de " . $meses[$mes] . " del " . $anio;
                        } //fin if(strcmp)
                    }//fin while
                } else {
                    $fechaFinal = "El mes tiene solo 28 dias";
                }
            }
        } else {
            $anioNumero = $anioNumero - 2016;

            if (($anioNumero % 4) == 0) {//Año bisiesto
                if ($diaNumero <= 29) {
                    while (next($meses)) { //Next regresa un booleano
                        if (strcmp(key($meses), $mes) == 0) {
                            // key() devuelve el elemento índice de la posición actual del array. //regresa un String
                            $fechaFinal = $dia . " de " . $meses[$mes] . " del " . $anio;
                        } //fin if(strcmp)
                    }//fin while
                } else {
                    $fechaFinal = "El mes solo tiene 29 dias";
                }
            } else {//Año no bisiesto
                if ($diaNumero <= 28) {
                    while (next($meses)) { //Next regresa un booleano
                        if (strcmp(key($meses), $mes) == 0) {
                            // key() devuelve el elemento índice de la posición actual del array. //regresa un String
                            $fechaFinal = $dia . " de " . $meses[$mes] . " del " . $anio;
                        } //fin if(strcmp)
                    }//fin while
                } else {
                    $fechaFinal = "El mes tiene solo 28 dias";
                }
            }
        }
    }

    function nombreMes() {
        while (next($meses)) { //Next regresa un booleano
            if (strcmp(key($meses), $mes) == 0) {
                // key() devuelve el elemento índice de la posición actual del array. //regresa un String
                $fechaFinal = $dia . " de " . $meses[$mes] . " del " . $anio;
            } //fin if(strcmp)
        }//fin while
    }

}


    