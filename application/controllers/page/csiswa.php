<?php
class Csiswa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mpost');
    }
    function index(){

        $data['materiajar'] = '';
        $data['materiajar_row'] = $this->mpost->read_data_materiajar();

        $data['infosekolah']='';
        $data['infosekolah_row']=$this->mpost->read_data_infosekolah();

        $data['posting']='';
        $data['posting_row']=$this->mpost->read_data_posting();


        $data['siswa']='';
        $data['siswa_row']=$this->mpost->read_data_siswa();

        $data['title']="Siswa SMA NEGERI ABUNG TINGGI";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/page/vsiswa',$data);
        $this->load->view('frontend/element/vfooter');
    }
}
?>