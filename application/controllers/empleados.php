<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('idusuario')){
			redirect('/', 'refresh');
		}
	}
	public function index(){
		$this->load->view('layout/header',array('titulo'=>'Empleados','css'=>'navbar','css_body'=>'empleados','fancy'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/empleados/listar');
		$this->load->view('layout/footer');
	}
	public function agregar(){
		$this->load->view('layout/header',array('titulo'=>'Agregar Empleado','css'=>'navbar','css_body'=>'empleados'));
		$this->load->view('layout/navbar');
		$this->load->view('admin/empleados/agregar');
		$this->load->view('layout/footer');
	}
	public function editar($id=null){
		$this->load->view('layout/header',array('titulo'=>'Editar Empleado '.$id,'css'=>'navbar','css_body'=>'empleados'));
		$this->load->view('layout/navbar');
		$this->load->view('admin/empleados/editar');
		$this->load->view('layout/footer');
	}

}
/* End of file empleados.php */
/* Location: ./application/controllers/empleados.php */