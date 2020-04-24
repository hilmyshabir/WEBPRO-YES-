<?php

class Konsul_controller_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Konsul_model');
        $this->load->library('form_validation');
    }

    public function index_konsul_admin()
    {
        $data['title'] = 'Daftar Konsultasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['konsul'] = $this->Konsul_model->getAllKonsul();
        if ($this->input->post('keyword')) {
            $data['konsul'] = $this->Konsul_model->cariDataKonsul();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('konsul/index_konsul_admin', $data);
        $this->load->view('templates/footer');
    }

    public function edit_konsul($id)
    {
        $data['title'] = 'Form Ubah Data Konsul';
        $data['konsul'] = $this->Konsul_model->getDataKonsulById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->input->post('nama_balita')) {
            $this->form_validation->set_rules('nama_balita', 'Nama_balita', 'required');
            $this->form_validation->set_rules('nama_ibu', 'Nama_ibu', 'required');
            $this->form_validation->set_rules('tgl_konsul', 'tanggal', 'required');
            $this->form_validation->set_rules('waktu_konsul', 'waktu', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('konsul/edit_konsul');
            } else {
                $this->Konsul_model->editDataKonsul($id);
                $this->session->set_flashdata('flash', 'diubah');
                redirect('konsul_controller_admin/index_konsul_admin', 'refresh');
            }
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('konsul/edit_konsul', $data);
            $this->load->view('templates/footer');
        }
    }

    public function hapus_konsul($id)
    {
        $this->Konsul_model->hapusDataKonsul($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('konsul_controller_admin/index_konsul_admin', 'refresh');
    }
}
