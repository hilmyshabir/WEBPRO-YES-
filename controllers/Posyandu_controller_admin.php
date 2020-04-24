<?php

class Posyandu_controller_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Posyandu_model');
        $this->load->library('form_validation');
    }

    public function index_balita_admin()
    {
        $data['title'] = 'Daftar Balita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['balita'] = $this->Posyandu_model->getAllBalita();
        if ($this->input->post('keyword')) {
            $data['balita'] = $this->Posyandu_model->cariDataBalita();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('balita/index_balita_admin', $data);
        $this->load->view('templates/footer');
    }

    public function edit_balita($id)
    {
        $data['title'] = 'Form Ubah Data Balita';
        $data['balita'] = $this->Posyandu_model->getDataBalitaById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->input->post('nama_balita')) {
            $this->form_validation->set_rules('nama_balita', 'Nama_balita', 'required');
            $this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required');
            $this->form_validation->set_rules('jk_balita', 'Jk_balita', 'required');
            $this->form_validation->set_rules('nama_ibu', 'Nama_ibu', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('balita/edit_balita');
            } else {
                $this->Posyandu_model->editDataBalita($id);
                $this->session->set_flashdata('flash', 'diubah');
                redirect('posyandu_controller_admin/index_balita_admin', 'refresh');
            }
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('balita/edit_balita', $data);
            $this->load->view('templates/footer');
        }
    }

    public function hapus_balita($id)
    {
        $this->Posyandu_model->hapusDataBalita($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('posyandu_controller_admin/index_balita_admin', 'refresh');
    }
}
