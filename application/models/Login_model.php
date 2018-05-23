<?php

class Login_model extends CI_Model {
	
	public function get_datos()
	{
		$this->load->database();

		return $this->db->get('usuarios');
	}
}