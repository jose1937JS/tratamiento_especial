<?php 

class Inicio_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_estudiantes()
	{
		return $this->db->query("SELECT est_trat_piv.aprobado, est_trat_piv.id_estudiante, est_trat_piv.id, est_trat_piv.id_tratamiento, estudiantes.cedula, estudiantes.nombre, estudiantes.apellido, estudiantes.email, estudiantes.telefono , tratamiento.tratamiento_esp FROM est_trat_piv INNER JOIN estudiantes ON est_trat_piv.id_estudiante = estudiantes.id INNER JOIN tratamiento ON est_trat_piv.id_tratamiento = tratamiento.id ORDER BY est_trat_piv.id DESC");
	}

	public function eliminar($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('est_trat_piv');
	}

	public function editar($id, $data = [])
	{
		$this->db->where('id', $id);
		$this->db->update('estudiante', $data);
	}

	public function filtro($f)
	{
		if ($f == 'true') {
			return $this->db->query("SELECT est_trat_piv.aprobado, est_trat_piv.id_estudiante, est_trat_piv.id, est_trat_piv.id_tratamiento, estudiantes.cedula, estudiantes.nombre, estudiantes.apellido, estudiantes.email, estudiantes.telefono , tratamiento.tratamiento_esp FROM est_trat_piv INNER JOIN estudiantes ON est_trat_piv.id_estudiante = estudiantes.id INNER JOIN tratamiento ON est_trat_piv.id_tratamiento = tratamiento.id WHERE aprobado = 'true'");	
		}
		
		return $this->db->query("SELECT est_trat_piv.aprobado, est_trat_piv.id_estudiante, est_trat_piv.id, est_trat_piv.id_tratamiento, estudiantes.cedula, estudiantes.nombre, estudiantes.apellido, estudiantes.email, estudiantes.telefono , tratamiento.tratamiento_esp FROM est_trat_piv INNER JOIN estudiantes ON est_trat_piv.id_estudiante = estudiantes.id INNER JOIN tratamiento ON est_trat_piv.id_tratamiento = tratamiento.id WHERE id_tratamiento = $f");
	}

	public function filtro_ced($ci)
	{
		return $this->db->query("SELECT est_trat_piv.aprobado, est_trat_piv.id_estudiante, est_trat_piv.id, est_trat_piv.id_tratamiento, estudiantes.cedula, estudiantes.nombre, estudiantes.apellido, estudiantes.email, estudiantes.telefono , tratamiento.tratamiento_esp FROM est_trat_piv INNER JOIN estudiantes ON est_trat_piv.id_estudiante = estudiantes.id INNER JOIN tratamiento ON est_trat_piv.id_tratamiento = tratamiento.id WHERE estudiantes.cedula = $ci");
	}

	public function perfil($id)
	{
		return $this->db->query("SELECT materias.materia, unidades_credito.id as idunidad, unidades_credito.id_materia, unidades_credito.unidades, est_trat_piv.aprobado, est_trat_piv.id_estudiante, est_trat_piv.id, est_trat_piv.id_tratamiento, estudiantes.id as idest, estudiantes.cedula, estudiantes.nombre, estudiantes.apellido, estudiantes.email, estudiantes.telefono, estudiantes.constancia_notas, estudiantes.observacion, tratamiento.tratamiento_esp FROM est_trat_piv INNER JOIN estudiantes ON est_trat_piv.id_estudiante = estudiantes.id INNER JOIN tratamiento ON est_trat_piv.id_tratamiento = tratamiento.id INNER JOIN unidades_credito ON est_trat_piv.id = unidades_credito.id_est_trat_piv INNER JOIN materias ON unidades_credito.id_materia = materias.id WHERE est_trat_piv.id_estudiante = $id");
	}

	public function aprobar_sol($id, $bool)
	{
		$this->db->where('id', $id);
		$this->db->update('est_trat_piv', ['aprobado' => $bool]);
	}

	public function registro($data)
	{
		$this->db->insert('estudiante', $data);
	}

	public function pdfsingular($id)
	{
		return $this->db->select('estudiantes.id, estudiantes.nombre, estudiantes.apellido, estudiantes.cedula, estudiantes.telefono, estudiantes.email, materias.materia, unidades_credito.id_materia, unidades_credito.unidades, est_trat_piv.aprobado, est_trat_piv.id_estudiante, est_trat_piv.id, est_trat_piv.id_tratamiento, tratamiento.tratamiento_esp')
					->join('estudiantes', 'est_trat_piv.id_estudiante = estudiantes.id')
					->join('tratamiento', 'est_trat_piv.id_tratamiento = tratamiento.id')
					->join('unidades_credito', 'est_trat_piv.id = unidades_credito.id_est_trat_piv')
					->join('materias', 'unidades_credito.id_materia = materias.id')
				->get_where('est_trat_piv', ['est_trat_piv.id_estudiante' => $id]);
	}	
}
