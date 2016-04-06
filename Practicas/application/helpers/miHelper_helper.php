<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('obtener_paises')) {

    function obtener_paises() {
        $CI = & get_instance();
        $CI->load->model('paisModelo');

        $paises = $CI->paisModelo->obtenerPaises();
        if (count($paises) == 0) {
            $paises = array();
        }

        return $paises;
    }
    
    function buscar_estados($idPais) {
        $CI = & get_instance();
        $CI->load->model('paisModelo');
        
        $estados = $CI->paisModelo->buscarEstados($idPais);        
        if (count($estados) == 0) {
            $estados = array();
        }

        return $estados;
    }

    function info_estado($idEdo) {
        $CI = & get_instance();
        $CI->load->model('paisModelo');
        
        $infoEstado= $CI->paisModelo->obtenerInfoEdo($idEdo);        
        
        return $infoEstado;
    }

    
    
}