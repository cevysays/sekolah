<?php
class Cpage extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('mpost');
        $this->load->library('pagination');
        $this->load->model('mlogin');
        $this->load->model('mguest_book');
    }

    function index()
    {



        $data['materiajar_row'] = $this->mpost->read_data_materiajar();


        $data['infosekolah_row'] = $this->mpost->read_data_infosekolah();


        $data['posting_row'] = $this->mpost->read_data_posting();

        $data['title'] = "Selamat Datang Di SMA NEGERI ABUNG TINGGI";
        $this->load->view('frontend/element/vheader', $data);
        $this->load->view('frontend/element/vcontent', $data);
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

    function login() {
        $username = $this->input->post('username', TRUE);
        $password = md5($this->input->post('password', TRUE));
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('member');
        if ($query->num_rows() == 1) {
            foreach ($query->result() as $row) {
                $nama = $row->nama;
                $id = $row->id;
            }
        }

        $user = $this->mlogin->validasi_user_front($username, $password);
        if ($user == TRUE) {
            $data = array(
                'nama' => $nama,
                'username' => $username,
                'id' => $id,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($data);
            redirect(base_url());
        } else {
            $this->session->set_flashdata('username', $username);
            $this->session->set_flashdata('loggin_message', 'Username or Password is not valid');
            redirect(site_url());
        }
    }




}

?>