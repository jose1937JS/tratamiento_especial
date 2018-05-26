<?php

class Solicitud_model extends CI_Model {

	public function add($data, $trats)
	{
		$this->load->database();
		$this->db->insert('estudiantes', $data);

		$a = $this->db->query('select @@identity as last_id');
		$b = $a->result_array();

		foreach ($trats as $key => $value)
			if (empty($value)) unset($trats[$key]);

		$trats = array_merge($trats);

		$id =  $b[0]['last_id'];
		
		if (isset($trats['extracredito'])) {
			$id_trat = $trats['extracredito'];
			$unid = $trats['credcred'];

			foreach ($trats['ecmats'] as $value) {
				$dat = [
					'id_estudiante' => $id,
					'id_tratamiento' => $id_trat,
					'unidades_cred' => $unid,
					'id_materia' => $value
				];
				
				$this->db->insert('est_trat_piv', $dat);
			}

		}

		if (isset($trats['extraordinario'])) {
			$id_trat = $trats['extraordinario'];

			foreach ($trats['extmats'] as  $value) {
				$dat = [
					'id_estudiante' => $id,
					'id_tratamiento' => $id_trat,
					'id_materia' => $value
				];
								
				$this->db->insert('est_trat_piv', $dat);
			}

		}

		if (isset($trats['paralelo'])) {
			$id_trat = $trats['paralelo'];

			foreach ($trats['parmats'] as  $value) {
				$dat = [
					'id_estudiante' => $id,
					'id_tratamiento' => $id_trat,
					'id_materia' => $value
				];
				
				$this->db->insert('est_trat_piv', $dat);
			}

		}

		if (isset($trats['grado1'])) {
			$id_trat = $trats['grado1'];

			$dat = [
				'id_estudiante' => $id,
				'id_tratamiento' => $id_trat,
				'id_materia' => $value
			];
			$this->db->insert('est_trat_piv', $dat);

		}

		if (isset($trats['ultsemestre'])) {
			$id_trat = $trats['ultsemestre'];
			$unid = $trats['ultsemcred'];

			foreach ($trats['ultsemmats'] as $value) {
				$dat = [
					'id_estudiante' => $id,
					'id_tratamiento' => $id_trat,
					'unidades_cred' => $unid,
					'id_materia' => $value
				];
				
				$this->db->insert('est_trat_piv', $dat);
			}

		}
	}

	public function send_mail()
	{
		// logica para enviar por correo una noticacion al estudiante q fue aprobado
	}
}