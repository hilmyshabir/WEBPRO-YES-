<?php

class Konsul_controller_user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Konsul_model');
        $this->load->library('form_validation');
    }

    public function index_konsul_user()
    {
        $data['title'] = 'Daftar Konsultasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['konsul'] = $this->Konsul_model->getAllKonsul();
        if ($this->input->post('keyword')) {
            $data['konsul'] = $this->Konsul_model->cariDataKonsul();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('konsul/index_konsul_user', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_konsul()
    {
        $data['title'] = 'Form Tambah Data Konsul';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->input->post('nama_balita')) {
            $this->form_validation->set_rules('nama_balita', 'Nama_balita', 'required');
            $this->form_validation->set_rules('nama_ibu', 'Nama_ibu', 'required');
            $this->form_validation->set_rules('tgl_konsul', 'tanggal', 'required');
            $this->form_validation->set_rules('waktu_konsul', 'waktu', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('konsul/tambah_konsul');
            } else {
                $this->Konsul_model->tambahDataKonsul();
                $this->session->set_flashdata('flash', 'ditambah');
                redirect('konsul_controller_user/index_konsul_user', 'refresh');
            }
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('konsul/tambah_konsul', $data);
            $this->load->view('templates/footer');
        }
    }
}
