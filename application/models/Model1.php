<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model1 extends CI_Model {

	public function listar()
	{
		$this->db->where('estado','1');
		$consulta = $this->db->get('marca');
		return $consulta->result();
	}




}