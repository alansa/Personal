<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class paisesControlador extends CI_Controller {

       public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('miHelper_helper');
        $this->load->helper('fecha_helper');
//      $datos['base_url'] = base_url();
    }

    public function index() {
//      $this->load->model('paisModelo');
//      $datos['paises'] = $this->paisModelo->obtenerPaises();
        $datos['paises'] = obtener_paises();
        $datos['fecha'] = obtenerFecha("1992-12-16");
        $this->load->view('paisVista', $datos);
    }

    public function leerPais($idPais) {

//      $this->load->model('paisModelo');
//      $datos['paises'] = $this->paisModelo->obtenerPaises();
        $datos['paises'] = obtener_paises();
        $datos['estados'] = buscar_estados($idPais);
        $this->load->view('paisVista', $datos);
    }

    public function leerEstado($idPais, $idEdo) {

//      $this->load->model('paisModelo');
//      $datos['paises'] = $this->paisModelo->obtenerPaises();
        $datos['paises'] = obtener_paises();
        $datos['estados'] = buscar_estados($idPais);
        $datos['informacion'] = info_estado($idEdo);
        $this->load->view('paisVista', $datos);
    }
//    
//    public function obtenerFecha(){
//        
//   $datos['fecha'] = obtenerFecha("2015-08-16");
//    $this->load->view('paisVista',$datos);
//    }
//           
}