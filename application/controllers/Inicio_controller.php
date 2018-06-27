<?php

class Inicio_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(['session']);
		$this->load->helper('url');
		$this->load->helper('form');

		$this->load->model('inicio_model');
		$this->load->model('solicitud_model');
	}

	public function index()
	{

		if ( $this->session->userdata('usuario') )
		{
			$data = [
				'usuario' => $this->session->userdata('usuario'), 
				'est' 	  => $this->inicio_model->get_estudiantes()
			];

			$data2 = [
				'usuario' => $this->session->userdata('usuario'), 
				'id' 	  => $this->solicitud_model->checkFormStatusDB(),
				'clave'	  => $this->db->get_where('usuarios', ['user' => 'admin'])->result()[0]->pass
			];

			$this->load->view('includes/header', $data2);
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

		$data2 = [
			'usuario' => $this->session->userdata('usuario'), 
			'id' 	  => $this->solicitud_model->checkFormStatusDB()
		];

		$this->load->view('includes/header', $data2);
		$this->load->view('inicio', $data);
		$this->load->view('includes/footer');
	}

	public function filtro_ced()
	{
		$c = $this->input->post('search');

		$data2 = [
			'usuario' => $this->session->userdata('usuario'), 
			'id' 	  => $this->solicitud_model->checkFormStatusDB()
		];

		$data = ['usuario' => $this->session->userdata('usuario'), 'est' => $this->inicio_model->filtro_ced($c)];

		$this->load->view('includes/header', $data2);
		$this->load->view('inicio', $data);
		$this->load->view('includes/footer');
	}

	public function eliminar($id)
	{
		$this->inicio_model->eliminar($id);
		redirect($this->session->userdata('usuario'));
	}

	public function informacion($id)
	{
		$data = ['infor' => $this->inicio_model->perfil($id)->result()];
		$data2 = [
			'usuario' => $this->session->userdata('usuario'), 
			'id' 	  => $this->solicitud_model->checkFormStatusDB()
		];

		$this->load->view('includes/header', $data2);
		$this->load->view('perfil', $data);
		$this->load->view('includes/footer');
	}

	public function aprobar_sol($id, $bool)
	{
		// $this->load->library('email');
		$this->inicio_model->aprobar_sol($id, $bool);
		// $asd = $this->inicio_model->perfil($id)->result();

		// $this->email->from('aasd@asd.com', 'name');
		// $this->email->to($asd[0]->email);
		// $this->email->subject('Email Test');
		// $this->email->message('Testing the email class.');

		// $this->email->send();

		$usuario = $this->session->userdata('usuario');


		redirect('Inicio_controller');
	}

	// public function aniadir()
	// {
	// 	$data = [
	// 		'cedula'   => $this->input->post('cedula'),
	// 		'nombre'   => $this->input->post('nombre'),
	// 		'apellido' => $this->input->post('apellido'),
	// 		'telefono' => $this->input->post('telefono'),
	// 		'correo'   => $this->input->post('correo')
	// 	];

	// 	$this->inicio_model->registro($data);
	// 	redirect('estudiantes');
	// }


	public function pdfsingular($id)
	{
		$data['pdf'] = $this->inicio_model->pdfsingular($id)->result();
		$this->load->view('pdfsingular', $data);
	}

	public function cambioClave()
	{
		$pass = $this->input->post('nueva');
		$this->db->where('user', 'admin');
		$this->db->update('usuarios', ['pass' => $pass]);
		redirect('admin');
	}

}