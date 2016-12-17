<?php
class Mlogreg extends CI_Model{
    private $table_name_register;

    function __construct(){
        parent::__construct();
        $this->table_name_register = 'member';
    }

    function data_register($dataregister){
        $this->db->insert($this->table_name_register,$dataregister);
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }



    function get_data_login($query){
        $this->db->where($query);
        $q = $this->db->get($this->table_name_register);
        if($q->num_rows() > 0)
        {
            return $query->row();
        }
        else
        {
            return null;
        }
    }

}
?>