<?php
class ProductosModel extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }
    function get_all(){
        $query=$this->db->get('usuarios',10);
        return $query->result();

    }
}
?>