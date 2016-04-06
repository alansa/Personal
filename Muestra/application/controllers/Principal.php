<?php

class Principal extends CI_Controller {

    public function Index() {


        /*
          Tenemos nuestra carpeta principal en la que se encuentra el Index
          Se puede eliminar y debemos recordar que ya tenemos creado nuestro header y footer
         */
     //   $this->load->view('Principal/Index');
$data['titulo']="Plantilla";
        
        $this->load->view('Componentes/Header',$data);
        $this->load->view('Componentes/Pagina');
        $this->load->view('Componentes/Footer');
    }

}
