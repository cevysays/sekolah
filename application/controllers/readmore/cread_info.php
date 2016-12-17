<?php
class Cread_info extends CI_Controller{

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




        $data['title']= "Selamat Datang Di SMA NEGERI ABUNG TINGGI";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/menu/vinfosekolah_full',$data);
        $this->load->view('frontend/element/vfooter');



    }

    function selanjutnya(){
        $id=$this->uri->segment(4);
        $data=array(
            'infosekolah'=>$this->mpost->get_info_id($id)
        );

        $data['title']= "Selamat Datang Di SMA NEGERI ABUNG TINGGI";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/readmore/vread',$data);
        $this->load->view('frontend/element/vfooter');

    }

    //read data-------------------------------------------

    function edit() //untuk menampilkan form edit data
    {
        $id = $this->security->xss_clean($this->uri->segment(3));
        $result = $this->mpost->get_data_materiajar($id);
        if ($result == null) redirect($this->index());
        else $data['materiajar'] = $result;
        $data['materiajar_row'] = $this->mpost->read_data_materiajar();

    }

    function edit_infosekolah() //untuk menampilkan form edit data
    {
        $id = $this->security->xss_clean($this->uri->segment(3));
        $result = $this->mpost->get_data_infosekolah($id);
        if ($result == null) redirect($this->index());
        else $data['infosekolah'] = $result;
        $data['infosekolah_row'] = $this->mpost->read_data_infosekolah();

    }
}
?>