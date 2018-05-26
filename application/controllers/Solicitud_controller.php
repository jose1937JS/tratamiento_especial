<?php

class Solicitud_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form']);
		$this->load->library('upload', ['upload_path' => './application/third_party/', 'allowed_types' => 'pdf']);
		$this->load->model('solicitud_model');
	}

	public function index()
	{
		$this->load->view('formulario');
	}

	public function aniadir()
	{

		if ( ! $this->upload->do_upload('constancia')) {
			echo $this->upload->display_errors();
		}
		else {
			$data = [
				'nombre' => $this->input->post('nombre'),
				'apellido' => $this->input->post('apellido'),
				'cedula' => $this->input->post('cedula'),
				'telefono' => $this->input->post('telefono'),
				'email' => $this->input->post('email'),
				'observacion' => $this->input->post('obs'),
				'constancia_notas' => $this->upload->data('file_name')
			];
			
			$trats = [
				'extracredito' => $this->input->post('extracredito'),
				'ecmats' => $this->input->post('ecmats'),
				'credcred' => $this->input->post('credcred'),

				'extraordinario' => $this->input->post('extraordinario'),
				'extmats' => $this->input->post('extmats'),
				

				'paralelo' => $this->input->post('paralelo'),
				'parmats' => $this->input->post('parmats'),

				'grado1' => $this->input->post('grado1'),

				'ultsemestre' => $this->input->post('ultsemestre'),
				'ultsemmats' => $this->input->post('ultsemmats'),
				'ultsemcred' => $this->input->post('ultsemcred')
			];
	
			$this->solicitud_model->add($data, $trats);
		}

		redirect('solicitud_tratamiento_especial');
	}
}