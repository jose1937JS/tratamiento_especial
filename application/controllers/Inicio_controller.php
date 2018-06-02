<?php

class Inicio_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(['session']);
		$this->load->helper('url');
		$this->load->helper('form');

		$this->load->model('inicio_model');
	}

	public function index()
	{

		if ( $this->session->userdata('usuario') ){
			$data = ['usuario' => $this->session->userdata('usuario'), 'est' => $this->inicio_model->get_estudiantes()];

			$this->load->view('includes/header', $dat = ['usuario' => $this->session->userdata('usuario')]);
			$this->load->view('inicio', $data);
			$this->load->view('includes/footer');
		}
		else {
			redirect('');
		}
	}

	public function filtro()
	{
		$f = $this->input->post('filtro');
		
		$data = ['usuario' => $this->session->userdata('usuario'), 'est' => $this->inicio_model->filtro($f)];

		$this->load->view('includes/header', $dat = ['usuario' => $this->session->userdata('usuario')]);
		$this->load->view('inicio', $data);
		$this->load->view('includes/footer');
	}

	public function filtro_ced()
	{
		$c = $this->input->post('search');

		$data = ['usuario' => $this->session->userdata('usuario'), 'est' => $this->inicio_model->filtro_ced($c)];

		$this->load->view('includes/header', $dat = ['usuario' => $this->session->userdata('usuario')]);
		$this->load->view('inicio', $data);
		$this->load->view('includes/footer');
	}

	// public function data()
	// {
	// 	$this->output
	// 		->set_content_type('application/json')
	// 		->set_output(json_encode($this->inicio_model->get_estudiantes()->result()));
	// }

	public function eliminar($id)
	{
		$this->inicio_model->eliminar($id);
		redirect($this->session->userdata('usuario'));
	}

	// public function editar($id)
	// {
	// 	$data = [
	// 		'cedula' => $this->input->post('cedula'),
	// 		'nombre' => $this->input->post('nombre'),
	// 		'apellido' => $this->input->post('apellido'),
	// 		'telefono' => $this->input->post('telefono'),
	// 		'email' => $this->input->post('email')
	// 	];

	// 	$this->inicio_model->editar($id, $data);
	// }

	public function informacion($id)
	{
		$data = ['infor' => $this->inicio_model->perfil($id)->result()];

		$this->load->view('includes/header', ['usuario' => $this->session->userdata('usuario')]);
		$this->load->view('perfil', $data);
		$this->load->view('includes/footer');
	}

	public function aprobar_sol($id)
	{
		// $this->load->library('email');
		$this->inicio_model->aprobar_sol($id);
		// $asd = $this->inicio_model->perfil($id)->result();

		// $this->email->from('aasd@asd.com', 'name');
		// $this->email->to($asd[0]->email);
		// $this->email->subject('Email Test');
		// $this->email->message('Testing the email class.');

		// $this->email->send();

		$usuario = $this->session->userdata('usuario');


		redirect('Inicio_controller');
	}

}