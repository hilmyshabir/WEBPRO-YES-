<?php

class Posyandu_controller_user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Posyandu_model');
        $this->load->library('form_validation');
    }

    public function index_balita_user()
    {
        $data['title'] = 'Daftar Balita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['balita'] = $this->Posyandu_model->getAllBalita();
        if ($this->input->post('keyword')) {
            $data['balita'] = $this->Posyandu_model->cariDataBalita();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('balita/index_balita_user', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_balita()
    {
        $data['title'] = 'Form Tambah Data Balita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->input->post('nama_balita')) {
            $this->form_validation->set_rules('nama_balita', 'Nama_balita', 'required');
            $this->form_validation->set_rules('tgl_lahir', 'Tg_lahir', 'required');
            $this->form_validation->set_rules('jk_balita', 'Jk_balita', 'required');
            $this->form_validation->set_rules('nama_ibu', 'Nama_ibu', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('balita/tambah_balita');
            } else {
                $this->Posyandu_model->tambahDataBalita();
                $this->session->set_flashdata('flash', 'ditambah');
                redirect('posyandu_controller_user/index_balita_user', 'refresh');
            }
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('balita/tambah_balita', $data);
            $this->load->view('templates/footer');
        }
    }
}
