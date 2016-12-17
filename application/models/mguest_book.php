<?php
class Mguest_book extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getAll() {
        $query = $this->db->get('buku_tamu');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    function insert($data){
        $query=$this->db->insert('buku_tamu',$data);
        return $query;
    }

}
?>