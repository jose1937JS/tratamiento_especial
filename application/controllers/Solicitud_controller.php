<?php


// Extracredito un max de 6 unidades a solicitar y solo max 1 materia por solicitar v/
// Ultimo semestre max 7 unidades de crédito a solicitar y 2 materias máximos para ingresar v/
// Mira manito en extraordinario en las materias mete max 1 también y no incluyas sistema información 1 2 y 3 ni en electiva área 1 ni pasantías v/
// Las materias sean del 6 semestre en adelante v/
// Y que el administrador pueda modificar siempre cuando aprueba y no aprueba por si se equivoca en aprobar un tratamiento v/
// Que tenga un modulo de activación y desactivación como un cierto tiempo para que el estudiante tenga fecha de inicio de solicitud y cierre la página y no deje solicitar mas v/
// logeo de estudiantes, q redireccione al formulario v/
// Reporte de la información del estudiante v/

class Solicitud_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form']);
		$this->load->library('upload', ['upload_path' => './application/third_party/', 'allowed_types' => 'pdf']);
		$this->load->library('session');
		$this->load->model('solicitud_model');
	}

	public function index()
	{
		$campo = $this->solicitud_model->checkFormStatusDB();
																																																																																		
		if ($campo[0]->campo == "1")
		{
			if ( $this->session->tempdata('cedula') )
			{
				$data['materias'] = $this->solicitud_model->get_mats();
				$this->load->view('formulario', $data);
			}
			else {
				redirect('estudiantes');
			}
		}
		else {
			$this->load->view('nohaynada');
		}
	}

	public function actualizarBoolForm($bool)
	{
		$this->solicitud_model->UpdateFormStatusDB($bool);
	}

	public function aniadir()
	{

		if ( ! $this->upload->do_upload('constancia')) {
			echo $this->upload->display_errors();
		}
		else {
			$data = [
				'nombre' 		   => $this->input->post('nombre'),
				'apellido' 		   => $this->input->post('apellido'),
				'cedula' 		   => $this->input->post('cedula'),
				'telefono' 		   => $this->input->post('telefono'),
				'email' 		   => $this->input->post('email'),
				'observacion' 	   => $this->input->post('obs'),
				'constancia_notas' => $this->upload->data('file_name')
			];
			
			$trats = [
				'extracredito'   => $this->input->post('extracredito'),
				'ecmats' 		 => $this->input->post('ecmats'),
				'credcred' 		 => $this->input->post('credcred'),

				'extraordinario' => $this->input->post('extraordinario'),
				'extmats' 		 => $this->input->post('extmats'),
				

				'paralelo' 		 => $this->input->post('paralelo'),
				'parmats' 		 => $this->input->post('parmats'),

				'grado1' 		 => $this->input->post('grado1'),

				'ultsemestre' 	 => $this->input->post('ultsemestre'),
				'ultsemmats' 	 => $this->input->post('ultsemmats'),
				'ultsemcred' 	 => $this->input->post('ultsemcred')
			];
	
			$this->session->unset_tempdata('cedula');
			$this->solicitud_model->add($data, $trats);
		}

		redirect('estudiantes');
	}

	public function acivarDesactivar($bool)
	{
		$this->solicitud_model->UpdateFormStatusDB($bool);
		redirect('admin');
	}
}