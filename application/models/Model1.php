<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model1 extends CI_Model {

	public function listar()
	{
		$this->db->where('estado','1');
		$consulta = $this->db->get('marca');
		return $consulta->result();
	}

	public function insertar($data)
	{
		//metodo insert (nombre de tabla, data)
		return $this->db->insert("marca",$data);
	}

	public function encontrar($id)
	{
		$this->db->where("id_marca",$id);
		$consulta = $this->db->get("marca");
		return $consulta->row();
	}

	public function actualizar($id,$data)
	{
		$this->db->where("id_marca",$id);
		return $this->db->update("marca",$data);
	}


}