<?php

class Login_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(['url', 'form']);
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$this->load->model('login_model');
		
		$usersdb = $this->login_model->get_datos();
		$result = $usersdb->result();

		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		if ( ($user == $result[0]->user && $pass == $result[0]->pass) OR ($user == $result[1]->user && $pass == $result[1]->pass) ) {
			$this->session->set_userdata('usuario', $user);

			$path = $this->session->userdata('usuario');
			redirect("$path");
		}
		else {
			// $data = ["err" => "Contraseña incorrecta."];
			// $this->load->view('login', $data);
			redirect('');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('usuario');
		redirect('');
	}

}