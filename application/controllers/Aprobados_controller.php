<?php

class Aprobados_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->

		$this->load->view('includes/header', $dat = ['usuario' => $this->session->userdata('usuario')]);
		$this->load->view('aprobados');
		$this->load->view('includes/footer');
	}
}