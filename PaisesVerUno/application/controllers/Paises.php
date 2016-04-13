<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paises extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('paises_model');
        $this->load->helper('fecha_helper');
    }

    public function Index() {
        $this->load->helper('url');
        $datos['base_url'] = base_url();
        $datos['fecha'] = obtenerFecha("1992-08-16");
//        $datos['fechaActual'] = getdate();
        $datos['fechaActual'] = getdate($timestamp = date($timestamp='time()'));


        $this->load->model('paises_model');
        $datos['paises'] = $this->paises_model->getPaises();
        $this->load->view('PaisesList', $datos);
       
    }

    public function read_pais($id) {

        $this->load->helper('url');
        $datos['base_url'] = base_url();

        $this->load->model('paises_model');
        $datos['paises'] = $this->paises_model->getPaises();

        $this->load->model('estados_model');
        $datos['estados'] = $this->estados_model->get_by_pais_id($id);


        $this->load->view('PaisesList', $datos);
    }

    public function read_info($idPais, $idEstado) {


        $this->load->helper('url');
        $datos['base_url'] = base_url();

        $this->read_pais($idPais);
        $this->load->model('estados_model');
        $datos['info'] = $this->estados_model->getInfo($idEstado);

        $this->load->view('InfoEstado', $datos);
    }

}
