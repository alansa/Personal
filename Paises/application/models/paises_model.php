<?php


class paises_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getPaises() {
        
        $this->db->select('id,pais');
        $this->db->from('paises');
        $result= $this->db->get();
        
        return $result->result_array();//todas las filas
      //   return $result->row_array();//fila
        
    }
    
    public function deleteCountry($id){
      
        $this->db->delete('paises', array('id' => $id)); 
        
    }
}
