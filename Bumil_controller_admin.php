<?php
//tegar ganteng
class Bumil_controller_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bumil_model');
        $this->load->library('form_validation');
    }

    public function index_bumil_admin()
    {
        $data['title'] = 'Daftar Ibu Hamil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['bumil'] = $this->Bumil_model->getAllBumil();
        if ($this->input->post('keyword')) {
            $data['bumil'] = $this->Bumil_model->cariDataBumil();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('bumil/index_bumil_admin', $data);
        $this->load->view('templates/footer');
    }

    public function edit_bumil($id)
    {
        $data['title'] = 'Form Ubah Data Bumil';
        $data['bumil'] = $this->Bumil_model->getDataBumilById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->input->post('nama_bumil')) {
            $this->form_validation->set_rules('nama_bumil', 'Nama_bumil', 'required');
            $this->form_validation->set_rules('tgl_pelayanan', 'Tgl_pelayanan', 'required');
            $this->form_validation->set_rules('umur_kehamilan', 'Umur_kehamilan', 'required');
            $this->form_validation->set_rules('resiko_kehamilan', 'Resiko_kehamilan', 'required');
            $this->form_validation->set_rules('hasil_penimbangan', 'Hasil_penimbangan', 'required');
            $this->form_validation->set_rules('imunisasi', 'Imunisasi', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('bumil/edit_bumil');
            } else {
                $this->Bumil_model->editDataBumil($id);
                $this->session->set_flashdata('flash', 'diubah');
                redirect('bumil_controller_admin/index_bumil_admin', 'refresh');
            }
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('bumil/edit_bumil', $data);
            $this->load->view('templates/footer');
        }
    }

    public function hapus_bumil($id)
    {
        $this->Bumil_model->hapusDataBumil($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('bumil_controller_admin/index_bumil_admin', 'refresh');
    }
}
