<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LandingPage extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data['judul'] = "Halaman depan";
		$this->load->view('templates/header_home', $data);
		$this->load->view('homes/home');
		$this->load->view('templates/footer_home');
	}
}
