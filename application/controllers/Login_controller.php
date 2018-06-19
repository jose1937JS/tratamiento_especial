<?php

class Login_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(['url', 'form']);
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
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

	public function login_est()
	{
		$this->load->view('loginest');
	}

	public function login_check_est()
	{
		$ced = $this->input->post('ced');

		$cedula = $this->login_model->get_estudiantes_ais($ced)->result();
		// $pass = $this->input->post('pass');

		if ($ced == $cedula[0]->cedula) // && $clave == $usuarios[$i]->clave
		{
			$this->session->set_tempdata('cedula', $ced, 650); // expira por si misma en 10 minutos == 650seg
			redirect('estudiantes/inicio');
		}
		else {
			// echo 'incorrecto';
			redirect('estudiantes');
		}

		// for ($i=0; $i < count($cedulas); $i++)
		// { 
		// 	if ($ced == $cedulas[$i]->cedula) // && $clave == $usuarios[$i]->clave
		// 	{
		// 		$this->session->set_userdata('usuario', $ced);
		// 		redirect('estudiantes/inicio');
		// 	}
		// 	else {
		// 		// echo 'incorrecto';
		// 		redirect('estudiantes');
		// 	}
		// }

	}

}