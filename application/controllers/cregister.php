<?php
class Cregister extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mlogreg');
    }

    function gagal_register(){
        $data['title']= "Registrasi Salah";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/logreg/vregister');
        $this->load->view('frontend/element/vfooter');
    }

    function sukses_register(){
        $data['title']="Registrasi Sukses";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/logreg/vsukses');
        $this->load->view('frontend/element/vfooter');
    }


    function register(){
        $this->form_validation->set_rules('firstname', 'Nama Depan', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Nama Belakang', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE)
        {
            $this->gagal_register();
        }
        else
        {
            $dataregister = array(
                'firstname'=>$this->input->post('firstname'),
                'lastname'=>$this->input->post('lastname'),
                'username'=>$this->input->post('username'),
                'password'=>$this->input->post('password'),
                'email'=>$this->input->post('email')
            );
            $this->mlogreg->data_register($dataregister);
            $this->sukses_register();
        }
    }
}
?>