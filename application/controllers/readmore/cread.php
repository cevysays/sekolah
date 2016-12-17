<?php
class Cread extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mpost');
    }

    function index(){

        $data['posting_row']=$this->mpost->read_data_posting_readmore();

        $data['materiajar'] = '';
        $data['materiajar_row'] = $this->mpost->read_data_materiajar();

        $data['infosekolah']='';
        $data['infosekolah_row']=$this->mpost->read_data_infosekolah();


        $data['title']= "Selamat Datang Di SMA NEGERI ABUNG TINGGI";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/readmore/vread',$data);
        $this->load->view('frontend/element/vfooter');

    }

    function selanjutnya(){
        $id=$this->uri->segment(4);

        $data=array(
            'posting'=>$this->mpost->get_post_id($id)
        );

        $data['title']= "Selamat Datang Di SMA NEGERI ABUNG TINGGI";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/readmore/vread',$data);
        $this->load->view('frontend/element/vfooter');

    }


}
?>