<?php
class Mlogin extends CI_Model{


    private $table = 'user'; //isi nama table user di sini

    function __construct()
    {
        parent::__construct();
    }

    function register($data)
    {
        $this->db->insert($this->table, $data);
    }

//    function login($username, $password)
//    {
//        $data = $this->db
//            ->where(array('username' => $username, 'password' => md5($password)))
//            ->get($this->table);
//
//        //dicek
//        if ($data->num_rows() > 0)
//        {
//            $user = $data->row();
//
//            //data hasil seleksi dimasukkan ke dalam $session
//            $session = array(
//                'logged_in' => 1,
//                'id_user' => $user->id_user,
//                'group' => $user->group,
//                'username' => $user->username,
//                'nama_lengkap' => $user->nama_lengkap,
//            );
//
//            //data dari $session akhirnya dimasukkan ke dalam session (menggunakan library CI)
//            $this->session->set_userdata($session);
//            return true;
//        }
//        else
//        {
//            $this->session->set_flashdata('notification', 'Username dan Password tidak cocok');
//            return false;
//        }
//    }

    function validasi_user_front($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('member');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
    }
}
?>