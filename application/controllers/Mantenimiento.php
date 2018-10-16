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

	public function mostrar_formulario()
	{
		//redireccion pagina de formulario
		$this->load->view("layout/header");
		$this->load->view("layout/aside");
		$this->load->view("mantenimiento/form1");
		$this->load->view("layout/footer");
	}

	public function guardar()
	{
		//capturamos los valores del formulaio
		$marca = $this->input->post("marca");
		//ordenamos en un array asociativo
		$data = array (
			'marca' =>$marca,
			'estado' => '1'
		);
		$this->Model1->insertar($data);
		redirect(base_url().'index.php/mantenimiento');
	}

	public function editar($id)
	{
		$data = array(
			'marca' => $this->Model1->encontrar($id),
		);
		//redireccion pagina de formulario
		$this->load->view("layout/header");
		$this->load->view("layout/aside");
		$this->load->view("mantenimiento/form1",$data);
		$this->load->view("layout/footer");
	}

	public function actualizar()
	{

		$marca = $this->input->post("marca");
		$id = $this->input->post("id");
		//ordenamos en un array asociativo
		$data = array (
			'marca' =>$marca
		);
		$this->Model1->actualizar($id,$data);
		redirect(base_url().'index.php/mantenimiento');
	}
}