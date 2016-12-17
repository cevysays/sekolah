<?php
class Clogin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('mlogreg');
    }

    public function index(){

    }

    public function gagal_login(){
        $data['title']="Gagal Login";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/logreg/vgagal_login');
        $this->load->view('frontend/element/vfooter');
    }

    public function homepage(){
        $nama = '';
        $data['title']="welcome $nama";
        $this->load->view('frontend/element/vheader',$data);

        $this->load->view('frontend/element/vfooter');
    }

    public function cekuser(){
        $data['user']= $this->input->post('username');
        $data['pass']=$this->input->post('password');

    }

    public function usermasuk(){

    }




}
?>