<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {//clase llamarse igual que archivo y inicializa con Mayusculas

  
    public function index() {//
        //$this->load->view('welcome_message');
        $this->suma();
        $this->load->helper('url');
        $data['base_url'] = base_url();
        $this->load->view('welcome_message',$data);
        $this->load->view('suma');
    }

    public function suma($numeroUno,$numeroDos) {


        $numeroA = $numeroUno;
        $numeroB = $numeroDos;
        
        $resultadoSuma = $numeroA + $numeroB;
        $data['suma'] = $resultadoSuma;
        $this->load->view('suma',$data);
    }

}
