<?php

class Solicitud_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function add($data, $trats)
	{
		$this->db->insert('estudiantes', $data);
// Five Finger Death Punch - Wrong Side Of Heaven lyrics

		$a = $this->db->query('select @@identity as last_id');
		$b = $a->result_array();

		foreach ($trats as $key => $value)
			if (empty($value)) unset($trats[$key]);

		$trats = array_merge($trats);

		$id =  $b[0]['last_id'];
		
		if (isset($trats['extracredito'])) {
			$id_trat = $trats['extracredito'];
			$unid = $trats['credcred'];

			$data = [
				'id_estudiante' => $id,
				'id_tratamiento' => $id_trat,
			];

			$this->db->insert('est_trat_piv', $data);

			$c = $this->db->query('select max(id) as last_id from est_trat_piv');
			$d = $c->result_array();
			
			foreach ($trats['ecmats'] as $value) {
				$dat = [
					'id_est_trat_piv' => $d[0]['last_id'],
					'unidades' => $unid,
					'id_materia' => $value
				];
				
				$this->db->insert('unidades_credito', $dat);
			}

		}

		if (isset($trats['extraordinario'])) {
			$id_trat = $trats['extraordinario'];

			$data = [
				'id_estudiante' => $id,
				'id_tratamiento' => $id_trat,
			];

			$this->db->insert('est_trat_piv', $data);

			$c = $this->db->query('select max(id) as last_id from est_trat_piv');
			$d = $c->result_array();
			
			foreach ($trats['extmats'] as $value) {
				$dat = [
					'id_est_trat_piv' => $d[0]['last_id'],
					'id_materia' => $value
				];
								
				$this->db->insert('unidades_credito', $dat);
			}

		}

		if (isset($trats['paralelo'])) {
			$id_trat = $trats['paralelo'];

			$data = [
				'id_estudiante' => $id,
				'id_tratamiento' => $id_trat,
			];

			$this->db->insert('est_trat_piv', $data);

			$c = $this->db->query('select max(id) as last_id from est_trat_piv');
			$d = $c->result_array();
			
			foreach ($trats['parmats'] as $value) {
				$dat = [
					'id_est_trat_piv' => $d[0]['last_id'],
					'id_materia' => $value
				];
								
				$this->db->insert('unidades_credito', $dat);
			}

		}

		if (isset($trats['grado1'])) {
			$id_trat = $trats['grado1'];

			$dat = [
				'id_estudiante' => $id,
				'id_tratamiento' => $id_trat
			];

			$this->db->insert('est_trat_piv', $dat);

		}

		if (isset($trats['ultsemestre'])) {
			$id_trat = $trats['ultsemestre'];
			$unid = $trats['ultsemcred'];

			$data = [
				'id_estudiante' => $id,
				'id_tratamiento' => $id_trat,
			];

			$this->db->insert('est_trat_piv', $data);

			$c = $this->db->query('select max(id) as last_id from est_trat_piv');
			$d = $c->result_array();
			
			foreach ($trats['ultsemmats'] as $value) {
				$dat = [
					'id_est_trat_piv' => $d[0]['last_id'],
					'unidades' => $unid,
					'id_materia' => $value
				];
				
				$this->db->insert('unidades_credito', $dat);
			}

		}
	}

	public function get_mats()
	{
		return $this->db->get('materias');
	}
}