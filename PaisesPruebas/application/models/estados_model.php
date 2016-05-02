<?php

class estados_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //put your code here

    public function get_by_pais_id($id) {

        $this->db->select('estado');
        $this->db->select('paises_id');
        $this->db->select('id');
        $this->db->from('estados');
        $this->db->where('paises_id', $id);
        $result = $this->db->get();

        return $result->result_array();
    }

    public function getInfo($id) {
        $this->db->select('descripcion');
        $this->db->from('estados');
        $this->db->where('id', $id);

        $resultado = $this->db->get();
        
        return $resultado->result_array();
    }

}
