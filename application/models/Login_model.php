<?php

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get_datos()
	{
		$this->load->database();

		return $this->db->get('usuarios');
	}

	public function get_estudiantes_ais($ced)
	{
		return $this->db->select('cedula')
					->get_where('estudiantes_ais', ['cedula' => $ced]);
	}	

}