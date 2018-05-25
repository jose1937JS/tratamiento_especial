<?php

class Solicitud_model extends CI_Model {

	public function add($data, $trats)
	{
		$this->load->database();
		$this->db->insert('estudiantes', $data);

		$a = $this->db->query('select @@identity as last_id');
		$b = $a->result_array();

		foreach ($trats as $key => $value) {
			$dat = [
				'id_estudiante' => $b[0]['last_id'],
				'extracredito' => 'asd'


				// $trats = [
				// 	'extracredito' => $this->input->post('extracredito'),
				// 	'credm1' => $this->input->post('credm1'),
				// 	'credm2' => $this->input->post('credm2'),
				// 	'credm3' => $this->input->post('credm3'),
				// 	'credcred' => $this->input->post('credcred'),

				// 	'extraordinario' => $this->input->post('extraordinario'),
				// 	'extm1' => $this->input->post('extm1'),
				// 	'extm2' => $this->input->post('extm2'),

				// 	'paralelo' => $this->input->post('paralelo'),
				// 	'parm1' => $this->input->post('parm1'),
				// 	'parm2' => $this->input->post('parm2'),

				// 	'grado1' => $this->input->post('grado1'),

				// 	'ultsemestre' => $this->input->post('ultsemestre'),
				// 	'ultsemm1' => $this->input->post('ultsemm1'),
				// 	'ultsemm2' => $this->input->post('ultsemm2'),
				// 	'ultsemm3' => $this->input->post('ultsemm3'),
				// 	'ultsemcred' => $this->input->post('ultsemm3')
				// ];
			];

			//$this->db->insert('est_trat_piv', $dat);
		}
	}

	public function send_mail()
	{
		// logica para enviar por correo una noticacion al estudiante q fue aprobado
	}
}