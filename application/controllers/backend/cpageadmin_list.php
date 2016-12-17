<?php
class Cpageadmin_list extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mpost');
    }
    function index(){



        $menu = $_GET['menu'];
        if(empty($menu))
        {
            $data['title']="Panel Admin";
            $this->load->view('backend/element/vheader',$data);
        }
        elseif($menu=="alu"){
            $data['title']="Alumni";
            $this->load->view('backend/element/vheader',$data);
        }
        elseif($menu=="art"){
            $data['title']="Artikel";
            $this->load->view('backend/element/vheader',$data);
        }
        elseif($menu=="gur"){
            $data['title']="Guru";
            $this->load->view('backend/element/vheader',$data);
        }
        elseif($menu=="hom"){
            $data['title']="Posting";
            $this->load->view('backend/element/vheader',$data);
        }
        elseif($menu=="inf"){
            $data['title']="Info Sekolah";
            $this->load->view('backend/element/vheader',$data);
        }
        elseif($menu=="mat"){
            $data['title']="Materi Ajar";
            $this->load->view('backend/element/vheader',$data);
        }
        elseif($menu=="sis"){
            $data['title']="Siswa";
            $this->load->view('backend/element/vheader',$data);
        }

        $data['alumni'] = '';
        $data['alumni_row'] = $this->mpost->read_data_alumni();

        $data['artikel'] = '';
        $data['artikel_row'] = $this->mpost->read_data_artikel();

        $data['guru'] = '';
        $data['guru_row'] = $this->mpost->read_data();

        $data['posting'] = '';
        $data['posting_row'] = $this->mpost->read_data_posting();

        $data['infosekolah'] = '';
        $data['infosekolah_row'] = $this->mpost->read_data_infosekolah();

        $data['materiajar'] = '';
        $data['materiajar_row'] = $this->mpost->read_data_materiajar();

        $data['siswa'] = '';
        $data['siswa_row'] = $this->mpost->read_data_siswa();


        $menu = $_GET['menu'];
        if(empty($menu))
        {

        }
        elseif($menu=="alu"){
            $this->load->view('backend/menu_sub_post/vinput_alumni',$data);
        }
        elseif($menu=="art"){
            $this->load->view('backend/menu_sub_post/vinput_artikel',$data);
        }
        elseif($menu=="gur"){
            $this->load->view('backend/menu_sub_post/vinput_guru',$data);
        }
        elseif($menu=="hom"){
            $this->load->view('backend/menu_sub_post/vinput_home',$data);
        }
        elseif($menu=="inf"){
            $this->load->view('backend/menu_sub_post/vinput_infosekolah',$data);
        }
        elseif($menu=="mat"){
            $this->load->view('backend/menu_sub_post/vinput_materiajar',$data);
        }
        elseif($menu=="sis"){
            $this->load->view('backend/menu_sub_post/vinput_siswa',$data);
        }

        $this->load->view('backend/element/vfooter');
    }

    function delete(){
        $kode = $this->security->xss_clean($this->uri->segment(3));
        $result = $this->mpost->get_data_posting($kode);
        if ($result == null) redirect($this->index());
        else $this->mpost->delete_data($kode);
        redirect($this->index());
    }

}
?>