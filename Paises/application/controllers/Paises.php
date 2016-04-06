<?php

class Paises extends CI_Controller {

    // var $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('paises_model');
        $this->load->model('estados_model');
        //   $this->data['titulo'] = "Paises";
    }

    public function Index() {

        $data['paises'] = $this->paises_model->getPaises();
        $data['titulo'] = "Paises";
 
        $this->load->view('Componentes/Header', $data);
        $this->load->view('Paises/AddCountry');
        $this->load->view('Paises/Paises', $data);
        $this->load->view('Paises/ReadInfo', null);
       
        $this->load->view('Componentes/Footer');
    }

    public function ReadCountry($id, $idEstado = NULL) {

        $data['titulo'] = "Estados";
    

        $data['paises'] = $this->paises_model->getPaises();
        
        $data['estados'] = $this->estados_model->get_by_pais_id($id);

        $this->load->view('Componentes/Header', $data);
        $this->load->view('Paises/AddCountry');
        $this->load->view('Paises/Paises', $data);
        
        if ($idEstado != NULL) {
           

            $data['info'] = $this->estados_model->getInfo($idEstado);
            $data['titulo'] = "Inf Estado";
            $this->load->view('Paises/ReadInfo', $data);
        } else {
            $this->load->view('Paises/ReadInfo', $data);
        }
       
        $this->load->view('Componentes/Footer');
    }
    
    public function AddCountry(){
        
        $data['titulo'] = "Agregar";

        $this->load->view('Componentes/Header', $data);
        $this->load->view('Paises/AddCountry');
        $this->load->view('Componentes/Footer');
    }
    
    public function EditCountry($id){
        $data['titulo'] = "Editar";
          $this->load->view('Componentes/Header', $data);
          $this->load->view('Paises/EditCountry');
        $this->load->view('Componentes/Footer');
    }

     public function DeleteCountry($id){
        $this->paises_model->deleteCountry($id);
         $this->Index();
       
    }
}
