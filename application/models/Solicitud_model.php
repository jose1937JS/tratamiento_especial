<?php

class Solicitud_model extends CI_Model {

	public function add($data, $trats)
	{
		$this->load->database();
		$this->db->insert('estudiantes', $data);

		$a = $this->db->query('select @@identity as last_id');
		$b = $a->result_array();

		var_dump($trats);

		foreach ($trats as $value) {
			$dat = [
				'id_estudiante' => $b[0]['last_id'],
				'id_tratamiento' => $value
			];

			var_dump($value);

			//$this->db->insert('est_trat_piv', $dat);
		}
	}

	public function send_mail()
	{
		// logica para enviar por correo una noticacion al estudiante q fue aprobado
	}
}