<?php
class Calumni extends CI_Controller{
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




        $data['alumni']='';
        $data['alumni_row']=$this->mpost->read_data_alumni();



        $data['title']="Alumni SMA NEGERI ABUNG TINGGI";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/page/valumni',$data);
        $this->load->view('frontend/element/vfooter');
    }
}
?>