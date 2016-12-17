<?php
class Cpageadmin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mpost');
        $this->load->model('mlogin');
    }
    function index(){
//        $data['alumni'] = '';
//        $data['alumni_row'] = $this->mpost->read_data_alumni();
//
//        $data['artikel'] = '';
//        $data['artikel_row'] = $this->mpost->read_data_artikel();
//
//        $data['guru'] = '';
//        $data['guru_row'] = $this->mpost->read_data();
//
//        $data['home'] = '';
//        $data['home_row'] = $this->mpost->read_data_posting();
//
//        $data['infosekolah'] = '';
//        $data['infosekolah_row'] = $this->mpost->read_data_infosekolah();
//
//        $data['materiajar'] = '';
//        $data['materiajar_row'] = $this->mpost->read_data_materiajar();
//
//        $data['siswa'] = '';
//        $data['siswa_row'] = $this->mpost->read_data_siswa();


        $data['title']="Panel Admin";
        $this->load->view('backend/element/vheader',$data);
        $this->load->view('backend/element/vcontent',$data);
        $this->load->view('backend/element/vfooter');
    }

    function create_posting() //untuk menambah data cd
    {
        $dataposting = array(
            'title_posting' => $this->input->post('title_posting'),
            'note_posting' => $this->input->post('note_posting')



        );


        $this->mpost->create_data_posting($dataposting);

        $this->index();
    }


    function create() //untuk menambah data cd
    {
        $data = array(
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'pelajaran' => $this->input->post('pelajaran'),
            'jabatan' => $this->input->post('jabatan')

        );

        $this->mpost->create_data($data);
        $this->index();
    }

    function create_siswa() //untuk menambah data cd
    {

        $datasiswa = array(
            'nis'=>$this->input->post('nis'),
            'nama'=>$this->input->post('nama'),
            'kelas'=>$this->input->post('kelas')
        );
        $this->mpost->create_data_siswa($datasiswa);
        $this->index();
    }

    function create_alumni() //untuk menambah data cd
    {

        $dataalumni = array(
            'nama_alumni'=>$this->input->post('nama_alumni'),
            'angkatan'=>$this->input->post('angkatan'),
            'email'=>$this->input->post('email')
        );
        $this->mpost->create_data_alumni($dataalumni);
        $this->index();
    }
    function create_infosekolah() //untuk menambah data cd
    {

        $datainfo = array(
            'title_info'=>$this->input->post('title_info'),
            'note_info'=>$this->input->post('note_info')

        );
        $this->mpost->create_data_infosekolah($datainfo);
        $this->index();
    }

    function create_materiajar() //untuk menambah data cd
    {

        $datamateri = array(
            'title_materiajar'=>$this->input->post('title_materiajar'),
            'note_materiajar'=>$this->input->post('note_materiajar')

        );
        $this->mpost->create_data_materiajar($datamateri);
        $this->index();
    }

    function create_artikel() //untuk menambah data cd
    {

        $dataartikel = array(
            'title_artikel'=>$this->input->post('title_artikel'),
            'note_artikel'=>$this->input->post('note_artikel')

        );
        $this->mpost->create_data_artikel($dataartikel);
        $this->index();
    }

    function create_prestasi() //untuk menambah data cd
    {

        $dataprestasi = array(
            'jenis'=>$this->input->post('jenis'),
            'tingkat'=>$this->input->post('tingkat'),
            'pelaksana'=>$this->input->post('pelaksana')

        );
        $this->mpost->create_data_prestasi($dataprestasi);
        $this->index();
    }

    function create_silabus() //untuk menambah data cd
    {

        $datasilabus = array(
            'note_silabus'=>$this->input->post('note_silabus')
            );
        $this->mpost->create_data_silabus($datasilabus);
        $this->index();
    }

    function create_agenda() //untuk menambah data cd
    {

        $dataagenda = array(
            'tanggal'=>$this->input->post('tanggal'),
            'acara'=>$this->input->post('acara'),
            'kegiatan'=>$this->input->post('kegiatan')
        );
        $this->mpost->create_data_agenda($dataagenda);
        $this->index();
    }


//    --------------------------------------------------------------------------






}
?>