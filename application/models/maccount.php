<?php
class Maccount extends CI_Model{
    private $table_admin = 'admin';
    private $table_member = 'member';

    public function __construct(){
        parent::__construct();
    }

    function register($form_data){
        $this->db->insert($this->table_member,$form_data);
    }

    function login($username,$password){
        $data = $this->db->where(array(
            'username'=>$username,
            'password'=>md5($password)
        ))->get($this->table_admin);

        if($data->num_rows() > 0)
        {
            $user = $data->row();
            $session = array(
                'logged_in'=> 1,
                'id_user'=> $user->id_user,
                'group'=>$user->group,
                'username'=>$user->username,
                'nama_lengkap'=>$user->nama_lengkap
            );
            $this->session->set_userdata($session);
            return true;
        }
        else
        {
            $this->session->set_flashdata('notification','Username dan password tidak cocok');
            return false;
        }
    }

    function logout(){
        $this->session->sess_destroy();
    }
}
?>


