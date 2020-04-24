<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Berita Terkini';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }
}
