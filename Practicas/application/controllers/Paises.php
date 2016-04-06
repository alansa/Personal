<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paises extends CI_Controller {

    private $paises = array
        (
        array("id" => 1, "nombre" => "Mexico", "poblacion" => 5),
        array("id" => 2, "nombre" => "Colombia", "poblacion" => 5),
        array("id" => 3, "nombre" => "Argentina", "poblacion" => 5),
        array("id" => 4, "nombre" => "Brasil", "poblacion" => 5),
        array("id" => 5, "nombre" => "Uruguay", "poblacion" => 5),
        array("id" => 6, "nombre" => "Chile", "poblacion" => 5),
        array("id" => 7, "nombre" => "Guatemala", "poblacion" => 5),
        array("id" => 8, "nombre" => "Venezuela", "poblacion" => 5),
        array("id" => 9, "nombre" => "Costa Rica", "poblacion" => 5),
        array("id" => 10, "nombre" => "Jamaica", "poblacion" => 5)
    );
    private $estados = array
        (
        array("id" => 1, "nombre" => "CDMX", "idPais" => 1),
        array("id" => 1, "nombre" => "Lucea", "idPais" => 10),
        array("id" => 1, "nombre" => "Guadalajara", "idPais" => 1),
        array("id" => 1, "nombre" => "Antioquía", "idPais" => 2),
        array("id" => 1, "nombre" => "Sao Paulo", "idPais" => 4),
        array("id" => 1, "nombre" => "Cordoba", "idPais" => 3),
        array("id" => 1, "nombre" => "Concepcion", "idPais" => 6),
        array("id" => 1, "nombre" => "Kingston", "idPais" => 10),
        array("id" => 1, "nombre" => "Durazno", "idPais" => 5),
        array("id" => 1, "nombre" => "Monterrey", "idPais" => 1),
        array("id" => 1, "nombre" => "San Marcos", "idPais" => 7),
        array("id" => 1, "nombre" => "Bogota", "idPais" => 2),
        array("id" => 1, "nombre" => "Cartago", "idPais" => 9),
        array("id" => 1, "nombre" => "Zulia", "idPais" => 8),
        array("id" => 1, "nombre" => "Sinaloa", "idPais" => 1),
        array("id" => 1, "nombre" => "Rondonia", "idPais" => 4),
        array("id" => 1, "nombre" => "Arauca", "idPais" => 2),
        array("id" => 1, "nombre" => "Rivera", "idPais" => 5),
        array("id" => 1, "nombre" => "Los Lagos", "idPais" => 6),
        array("id" => 1, "nombre" => "Edo. Mex", "idPais" => 1),
        array("id" => 1, "nombre" => "Buenos Aires", "idPais" => 3),
        array("id" => 1, "nombre" => "Santa Rosa ", "idPais" => 7),
        array("id" => 1, "nombre" => "Lara", "idPais" => 8),
        array("id" => 1, "nombre" => "Limon", "idPais" => 9)
    );

    public function index() {
        $data['paises'] = $this->paises;
        $this->load->view("verPaises", $data);
    }

    public function leer_pais($id) {

        foreach ($this->estados as $lista) {
            
            if (strcmp($lista['idPais'], $id) == 0) {
                
                $data['lista'] = $lista;
                $this->load->view('verEstados', $data);
            }
        }
        
    }

}
