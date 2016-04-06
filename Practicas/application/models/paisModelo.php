<?php


class paisModelo extends CI_Model {
   
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function obtenerPaises(){
        
        $this->db->select('id,pais');
        $this->db->from('paises');
        $resultado= $this->db->get();
        return $resultado -> result_array();
     }
    
    public function buscarEstados($idPais){
        $this->db->select('*');
        $this->db->from('estados');
        $this->db->where('paises_id', $idPais);
        $resultado= $this->db->get();
        return $resultado -> result_array();
    }
    
    public function obtenerInfoEdo($idEdo){
        $this->db->select('*');
        $this->db->from('estados');
        $this->db->where('id', $idEdo);
        $resultado= $this->db->get();
        return $resultado -> row_array();
        
    }
}
