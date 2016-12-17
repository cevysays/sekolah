<?php
class Cfitur extends CI_Controller{
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

        $data['title']="fitur SMA NEGERI ABUNG TINGGI";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/page/vfitur',$data);
        $this->load->view('frontend/element/vfooter');
    }
}
?>