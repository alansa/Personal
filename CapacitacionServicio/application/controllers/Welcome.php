<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {//clase llamarse igual que archivo y inicializa con Mayusculas

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {//
        //$this->load->view('welcome_message');
       // $this->suma();
        $this->load->helper('url');
        $data['base_url'] = base_url();
        $this->load->view('welcome_message',$data);
    }

    public function suma($numeroUno,$numeroDos) {


        $numeroA = $numeroUno;
        $numeroB = $numeroDos;
        
        $resultadoSuma = $numeroA + $numeroB;
        $data['suma'] = $resultadoSuma;
        $this->load->view('suma',$data);
    }

}
