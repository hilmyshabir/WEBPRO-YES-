<?php

class Bumil_controller_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bumil_model');
        $this->load->library('form_validation');
    }

    public function index_bumil_user()
    {
        $data['title'] = 'Daftar Ibu Hamil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['bumil'] = $this->Bumil_model->getAllBumil();
        if ($this->input->post('keyword')) {
            $data['bumil'] = $this->Bumil_model->cariDataBumil();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('bumil/index_bumil_user', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_bumil()
    {
        $data['title'] = 'Form Tambah Data Bumil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->input->post('nama_bumil')) {
            $this->form_validation->set_rules('id_bumil', 'Id_bumil', 'required|trim|is_unique[tb_bumil.id_bumil]');
            $this->form_validation->set_rules('nama_bumil', 'Nama_bumil', 'required');
            $this->form_validation->set_rules('tgl_pelayanan', 'Tgl_pelayanan', 'required');
            $this->form_validation->set_rules('umur_kehamilan', 'Umur_kehamilan', 'required');
            $this->form_validation->set_rules('resiko_kehamilan', 'Resiko_kehamilan', 'required');
            $this->form_validation->set_rules('hasil_penimbangan', 'Hasil_penimbangan', 'required');
            $this->form_validation->set_rules('imunisasi', 'Imunisasi', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('bumil/tambah_bumil');
            } else {
                $this->Bumil_model->tambahDataBumil();
                $this->session->set_flashdata('flash', 'ditambah');
                redirect('bumil_controller_user/index_bumil_user', 'refresh');
            }
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('bumil/tambah_bumil', $data);
            $this->load->view('templates/footer');
        }
    }
}
