<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mantenimiento extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Model1");
	}
	public function index()
	{
		$data = array("marca"=>$this->Model1->listar(),);

		$this->load->view("layout/header");
		$this->load->view("layout/aside");
		$this->load->view("mantenimiento/page1",$data);
		$this->load->view("layout/footer");

	}
}