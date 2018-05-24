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
		$this->load->view('includes/footer');
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
				'credm1' => $this->input->post('credm1'),
				'credm2' => $this->input->post('credm2'),
				'credm3' => $this->input->post('credm3'),
				'credcred' => $this->input->post('credcred'),

				'extraordinario' => $this->input->post('extraordinario'),
				'extm1' => $this->input->post('extm1'),
				'extm2' => $this->input->post('extm2'),

				'paralelo' => $this->input->post('paralelo'),
				'parm1' => $this->input->post('parm1'),
				'parm2' => $this->input->post('parm2'),

				'grado1' => $this->input->post('grado1'),

				'ultsemestre' => $this->input->post('ultsemestre'),
				'ultsemm1' => $this->input->post('ultsemm1'),
				'ultsemm2' => $this->input->post('ultsemm2'),
				'ultsemm3' => $this->input->post('ultsemm3'),
				'ultsemcred' => $this->input->post('ultsemm3')
			];

			var_dump($trats);exit();
	
			$this->solicitud_model->add($data, $trats);
		}

		redirect('solicitud_tratamiento_especial');
	}
}